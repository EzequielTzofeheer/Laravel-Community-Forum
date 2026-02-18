<div>

    <section class="bg-white dark:bg-gray-900 pt-6">

        <div class="px-6 mx-auto max-w-4xl">

            @forelse($myQuestions as $myQuestion)

                <a href="{{ route('user.post', [$myQuestion->id, $myQuestion->user->username, $myQuestion->slug]) }}">

                    <article class="mb-8 bg-white rounded-xl border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">

                        <div class="p-6">

                            <div class="flex justify-between items-center mb-4 text-gray-500 text-sm">

                                <span class="bg-green-200 text-green-900 text-xs font-semibold px-3 py-1 rounded-full dark:bg-neutral-900 dark:text-green-300 dark:border dark:border-neutral-700">
                                    {{ $myQuestion->category->name }}
                                </span>

                                <span>
                                    Publicado {{ $myQuestion->created_at->diffForHumans() }}
                                </span>

                            </div> <!-- flex justify-between items-center mb-4 text-gray-500 text-sm -->

                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-3">
                                    <img loading="lazy" class="w-8 h-8 rounded-full"
                                         src="{{ $myQuestion->user->profile_photo_url }}"
                                         alt="{{ $myQuestion->user->name }}">
                                    <span class="font-medium dark:text-white">
                                    {{ $myQuestion->user->name }}
                                </span>
                                </div>

                            </div> <!-- p-6 -->

                            <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white pt-5">
                                <a href="#">
                                    {{ $myQuestion->subject }}
                                </a>
                            </h2>

                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                {{ $myQuestion->text }}
                            </p>

                        </div> <!-- p-6 -->

                        <div class="px-6 pb-6 pt-6 border-t border-gray-200 dark:border-gray-700">

                            <div class="flex items-center gap-8 text-sm text-gray-500 dark:text-gray-400">

                                <div class="flex items-center gap-2 cursor-pointer transition-colors">

                                    <a href="#" wire:click.prevent="toggleLike(@js($myQuestion->id))">
                                        <svg class="w-5 h-5 flex-shrink-0 transition-colors
                                        {{ $myQuestion->likes->contains(auth()->id()) ? 'text-blue-600' : 'text-gray-500' }}"
                                             fill="currentColor"
                                             viewBox="0 0 20 20"
                                        >
                                            <path d="M3 8a2 2 0 012-2h3l1-3a2 2 0 114 0l-1 3h3a2 2 0 012 2v6a2 2 0 01-2 2H7a2 2 0 01-2-2V8z"/>
                                        </svg>
                                    </a>

                                    <span class="like-count">{{ $myQuestion->likes_count }}</span>

                                </div> <!-- flex items-center gap-2 cursor-pointer transition-colors -->

                                <a href="{{ route('user.post', [$myQuestion->id, $myQuestion->user->username, $myQuestion->slug]) }}">
                                    <div class="flex items-center gap-2 hover:text-gray-900 dark:hover:text-white transition-colors cursor-pointer">
                                        <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-3-.516L2 17l1.516-4.547A6.973 6.973 0 012 10c0-3.866 3.582-7 8-7s8 3.134 8 7z"/>
                                        </svg>
                                        <span>{{ $myQuestion->replies_count }}</span>
                                    </div>
                                </a>

                            </div> <!-- flex items-center gap-8 text-sm text-gray-500 dark:text-gray-400 -->

                        </div> <!-- px-6 pb-6 pt-6 border-t border-gray-200 dark:border-gray-700 -->

                    </article> <!-- mb-8 bg-white rounded-xl border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700 -->

                </a> <!-- -->

            @empty

                <div class="text-center py-24">
                    Nenhum post ainda.
                </div>

            @endforelse

            <div
                x-data
                x-intersect="$wire.loadMore()"
                class="h-10"
            ></div>

            <div wire:loading wire:target="loadMore" class="text-center py-4">
                <span class="text-gray-500 text-sm">Carregando mais posts...</span>
            </div>

        </div> <!-- px-6 mx-auto max-w-4xl -->

    </section> <!-- bg-white dark:bg-gray-900 pt-6 -->

</div> <!-- -->
