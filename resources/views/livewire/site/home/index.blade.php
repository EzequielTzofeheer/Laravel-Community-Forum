<div>

    @if (auth()->check())

        <section class="bg-white dark:bg-gray-900 pt-24">

            <div class="px-6 mx-auto max-w-4xl">

                <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-sm p-6">

                    <form wire:submit.prevent="store">

                        <div class="flex items-center gap-3 mb-4">

                                <img class="w-10 h-10 rounded-full"
                                     src="{{ auth()->user()->profile_photo_url }}"
                                     alt="{{ auth()->user()->name }}">

                            <div class="flex-1">
                                <input
                                    type="text"
                                    placeholder="No que você está pensando?"
                                    class="w-full bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-full px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 transition
                                    @error('subject') border-red-500 border-2 @else border-gray-300 @enderror" wire:model.defer="subject"
                                >
                                @error('subject')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </div>

                        </div> <!-- flex items-center gap-3 mb-4 -->

                        <div class="mb-4">
                            <select
                                wire:model.defer="category_id"
                                class="w-full bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-full px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 transition
                                @error('category_id') border-red-500 border-2 @else border-gray-300 @enderror"
                                >
                                <option value="">Selecione uma categoria</option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach

                            </select>

                            @error('category_id')
                                <span class="text-sm text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div> <!-- mb-4 -->


                        <textarea
                            rows="4"
                            placeholder="Escreva sua dúvida, compartilhe conhecimento ou inicie uma discussão..."
                            class="w-full bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg p-4 text-sm resize-none focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 transition
                            @error('text') border-red-500 border-2 @else border-gray-300 @enderror" wire:model.defer="text"
                        ></textarea>
                        @error('text')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror

                        <div class="flex items-center justify-between mt-4">
                            <button class="bg-gray-900 text-white px-6 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition">
                                Publicar
                            </button>
                        </div>

                    </form> <!-- -->

                </div> <!-- bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-sm p-6 -->

            </div> <!-- px-6 mx-auto max-w-4xl -->

        </section> <!-- bg-white dark:bg-gray-900 pt-24 -->

    @endif

    <section class="bg-white dark:bg-gray-900 pt-6">

        <div class="px-6 mx-auto max-w-4xl">

            @forelse($questions as $question)

                <a href="{{ route('user.post', [$question->user->username, $question->subject]) }}">

                    <article class="mb-8 bg-white rounded-xl border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">

                        <div class="p-6">

                            <div class="flex justify-between items-center mb-4 text-gray-500 text-sm">

                            <span class="bg-green-200 text-green-900 text-xs font-semibold px-3 py-1 rounded-full dark:bg-neutral-900 dark:text-green-300 dark:border dark:border-neutral-700">
                                {{ $question->category->name }}
                            </span>

                                <span>
                                Publicado {{ $question->created_at->diffForHumans() }}
                            </span>

                            </div> <!-- flex justify-between items-center mb-4 text-gray-500 text-sm -->

                            <div class="flex justify-between items-center">

                                <div class="flex items-center space-x-3">
                                    <img loading="lazy" class="w-8 h-8 rounded-full"
                                         src="{{ $question->user->profile_photo_url }}"
                                         alt="{{ $question->user->name }}">
                                    <span class="font-medium dark:text-white">
                                    {{ $question->user->name }}
                                </span>
                                </div>

                            </div> <!-- flex justify-between items-center -->

                            <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white pt-5">
                                <a href="#">
                                    {{ $question->subject }}
                                </a>
                            </h2>

                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                {{ $question->text }}
                            </p>

                        </div> <!-- p-6 -->

                        <div class="px-6 pb-6 pt-6 border-t border-gray-200 dark:border-gray-700">

                            <div class="flex items-center gap-8 text-sm text-gray-500 dark:text-gray-400">

                                <div class="flex items-center gap-2 cursor-pointer transition-colors">

                                    <a href="#" wire:click.prevent="toggleLike(@js($question->id))">
                                        <svg class="w-5 h-5 flex-shrink-0 transition-colors
                                        {{ $question->likes->contains(auth()->id()) ? 'text-blue-600' : 'text-gray-500' }}"
                                             fill="currentColor"
                                             viewBox="0 0 20 20"
                                        >
                                            <path d="M3 8a2 2 0 012-2h3l1-3a2 2 0 114 0l-1 3h3a2 2 0 012 2v6a2 2 0 01-2 2H7a2 2 0 01-2-2V8z"/>
                                        </svg>
                                    </a>

                                    <span class="like-count">{{ $question->likes_count }}</span>

                                </div> <!-- flex items-center gap-2 cursor-pointer transition-colors -->

                                <a href="#">
                                    <div class="flex items-center gap-2 hover:text-gray-900 dark:hover:text-white transition-colors cursor-pointer">
                                        <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-3-.516L2 17l1.516-4.547A6.973 6.973 0 012 10c0-3.866 3.582-7 8-7s8 3.134 8 7z"/>
                                        </svg>
                                        <span>{{ $question->replies->count() }}</span>
                                    </div>
                                </a>

                            </div> <!-- flex items-center gap-8 text-sm text-gray-500 dark:text-gray-400 -->

                        </div> <!-- px-6 pb-6 pt-6 border-t border-gray-200 dark:border-gray-700 -->

                    </article> <!-- mb-8 bg-white rounded-xl border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700 -->

                </a> <!-- -->

            @empty

                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                        Nenhum registro encontrado!
                    </td>
                </tr>

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
