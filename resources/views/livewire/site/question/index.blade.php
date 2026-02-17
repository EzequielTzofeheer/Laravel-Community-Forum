<div>

    <section class="bg-white dark:bg-gray-900 pt-6">

        <div class="px-6 mx-auto max-w-4xl">

            <article class="mb-8 bg-white rounded-xl border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">

                <div class="p-6">

                    <div class="flex justify-between items-center mb-4 text-gray-500 text-sm">

                        <span class="bg-gray-200 text-gray-900 text-xs font-semibold px-3 py-1 rounded-full dark:bg-neutral-900 dark:text-gray-300 dark:border dark:border-neutral-700">
                            {{ $this->question->category->name }}
                        </span>

                        <span>
                            Publicado {{ $this->question->created_at->diffForHumans() }}
                        </span>

                    </div> <!-- flex justify-between items-center mb-4 text-gray-500 text-sm -->

                    <div class="flex justify-between items-center">

                        <div class="flex items-center space-x-3">
                            <img loading="lazy" class="w-8 h-8 rounded-full"
                                 src="{{ $this->question->user->profile_photo_url }}"
                                 alt="{{ $this->question->user->name }}">
                            <span class="font-medium dark:text-white">
                                    {{ $this->question->user->name }}
                            </span>
                        </div>

                    </div> <!-- flex justify-between items-center -->

                    <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white pt-5">
                        <a href="#">
                            {{ $this->question->subject }}
                        </a>
                    </h2>

                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                        {{ $this->question->text }}
                    </p>

                </div> <!-- p-6 -->

                <div class="px-6 pb-6 pt-6 border-t border-gray-200 dark:border-gray-700">

                    <div class="flex items-center gap-8 text-sm text-gray-500 dark:text-gray-400">

                        <div class="flex items-center gap-2 cursor-pointer transition-colors">
                            <svg class="w-5 h-5 flex-shrink-0 like-icon transition-colors"
                                 fill="currentColor"
                                 viewBox="0 0 20 20">
                                <path d="M3 8a2 2 0 012-2h3l1-3a2 2 0 114 0l-1 3h3a2 2 0 012 2v6a2 2 0 01-2 2H7a2 2 0 01-2-2V8z"/>
                            </svg>
                            <span class="like-count">{{ $this->question->likes_count }}</span>
                        </div>

                        <div class="flex items-center gap-2 hover:text-gray-900 dark:hover:text-white transition-colors cursor-pointer">
                            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-3-.516L2 17l1.516-4.547A6.973 6.973 0 012 10c0-3.866 3.582-7 8-7s8 3.134 8 7z"/>
                            </svg>
                            <span>{{ $this->question->replies_count }}</span>
                        </div>

                    </div> <!-- flex items-center gap-8 text-sm text-gray-500 dark:text-gray-400 -->

                </div> <!-- px-6 pb-6 pt-6 border-t border-gray-200 dark:border-gray-700 -->

            </article> <!-- mb-8 bg-white rounded-xl border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700 -->

        </div> <!-- px-6 mx-auto max-w-4xl -->

    </section> <!-- bg-white dark:bg-gray-900 pt-6 -->

    <section class="bg-white dark:bg-gray-900 pt-6">

        <div class="px-6 mx-auto max-w-4xl">

            @forelse($this->question->replies as $reply)

                <article class="space-y-6">

                    <div class="flex items-start space-x-3">

                        <img class="w-8 h-8 rounded-full"
                             src="{{ $reply->user->profile_photo_url }}"
                             alt="{{ $reply->user->name }}">

                        <div class="flex-1">

                            <div class="flex items-center space-x-2">
                                <span class="text-[14px] font-semibold text-gray-900 dark:text-white">
                                    {{ $reply->user->name }}
                                </span>
                                <span class="text-xs text-gray-500 dark:text-gray-400">
                                    Publicado {{ $reply->created_at->diffForHumans() }}
                                </span>
                            </div>

                            <p class="mt-1 text-[14px] text-gray-700 dark:text-gray-300 leading-relaxed">
                                {{ $reply->text }}
                            </p>

                            <div class="flex items-center space-x-4 mt-2 text-xs text-gray-500 dark:text-gray-400">
                                <svg class="w-5 h-5 flex-shrink-0 like-icon transition-colors"
                                     fill="currentColor"
                                     viewBox="0 0 20 20">
                                    <path d="M3 8a2 2 0 012-2h3l1-3a2 2 0 114 0l-1 3h3a2 2 0 012 2v6a2 2 0 01-2 2H7a2 2 0 01-2-2V8z"/>
                                </svg>
                                <span class="like-count">3</span>
                                <button class="hover:underline">Responder</button>
                            </div>

                            <div class="flex items-start space-x-3 mt-4">

                                <img class="w-7 h-7 rounded-full"
                                     src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                     alt="Jese Leos">

                                <div>

                                    <div class="flex items-center space-x-2">
                                        <span class="text-[14px] font-semibold text-gray-900 dark:text-white">
                                            Jese Leos
                                        </span>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">
                                            Feb. 12, 2022
                                        </span>
                                    </div>

                                    <p class="mt-1 text-[14px] text-gray-700 dark:text-gray-300">
                                        Much appreciated! Glad you liked it 🙂
                                    </p>

                                    <div class="flex items-center space-x-4 mt-2 text-xs text-gray-500 dark:text-gray-400">
                                        <svg class="w-5 h-5 flex-shrink-0 like-icon transition-colors"
                                             fill="currentColor"
                                             viewBox="0 0 20 20">
                                            <path d="M3 8a2 2 0 012-2h3l1-3a2 2 0 114 0l-1 3h3a2 2 0 012 2v6a2 2 0 01-2 2H7a2 2 0 01-2-2V8z"/>
                                        </svg>
                                        <span class="like-count">8</span>
                                        <button class="hover:underline">Responder</button>
                                    </div>

                                </div> <!-- -->

                            </div> <!-- flex items-start space-x-3 mt-4 -->

                        </div> <!-- flex-1 -->

                    </div> <!-- flex items-start space-x-3 -->

                </article>  <!-- space-y-6 -->

            @empty

                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                        Nenhum registro encontrado!
                    </td>
                </tr>

            @endforelse

            <article class="flex items-start space-x-3 mt-8">

                <img class="w-8 h-8 rounded-full"
                     src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                     alt="Seu usuário">

                <div class="flex-1">

                    <textarea
                        rows="3"
                        placeholder="Escreva um comentário..."
                        class="w-full text-[14px] p-3 border border-gray-300 rounded-xl
                               focus:ring-2 focus:ring-blue-500 focus:outline-none
                               dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                    ></textarea>

                    <div class="flex items-center justify-between mt-4">
                        <button class="bg-gray-900 text-white px-6 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition">
                            Enviar
                        </button>
                    </div>

                </div> <!-- flex-1 -->

            </article> <!-- flex items-start space-x-3 mt-8 -->

        </div> <!-- px-6 mx-auto max-w-4xl -->

    </section> <!-- bg-white dark:bg-gray-900 pt-6 -->

</div> <!-- -->
