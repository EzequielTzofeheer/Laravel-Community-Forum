<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- ================= BÁSICO ================= -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0f172a">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ================= TÍTULO ================= -->
    <title>{{ $title ?? config('app.name') }}</title>

    <!-- ================= SEO PRINCIPAL ================= -->
    <meta name="description" content="Aprenda como criar um blog profissional do zero com estrutura correta de SEO, layout moderno e otimização para Google.">
    <meta name="keywords" content="blog, criar blog, seo, desenvolvimento web, html, layout moderno">
    <meta name="author" content="Seu Nome">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="https://seusite.com/blog/como-criar-um-blog-profissional">

    <!-- ================= FAVICON ================= -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
    <link rel="manifest" href="/assets/site.webmanifest">

    <!-- ================= OPEN GRAPH ================= -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Como Criar um Blog Profissional do Zero">
    <meta property="og:description" content="Aprenda como criar um blog profissional do zero com estrutura correta de SEO e layout moderno.">
    <meta property="og:url" content="https://seusite.com/blog/como-criar-um-blog-profissional">
    <meta property="og:site_name" content="Seu Site">
    <meta property="og:image" content="https://seusite.com/assets/blog-cover.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- ================= ARTICLE META ================= -->
    <meta property="article:published_time" content="2026-02-12T08:00:00-03:00">
    <meta property="article:modified_time" content="2026-02-12T10:00:00-03:00">
    <meta property="article:author" content="Seu Nome">
    <meta property="article:section" content="Desenvolvimento Web">
    <meta property="article:tag" content="SEO">
    <meta property="article:tag" content="HTML">
    <meta property="article:tag" content="Blog">

    <!-- ================= TWITTER CARD ================= -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Como Criar um Blog Profissional do Zero">
    <meta name="twitter:description" content="Aprenda como criar um blog profissional com estrutura correta de SEO e layout moderno.">
    <meta name="twitter:image" content="https://seusite.com/assets/blog-cover.jpg">
    <meta name="twitter:site" content="@seusite">

    <!-- ================= PERFORMANCE ================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- ================= FONTS ================= -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- ================= FLOWBITE CSS ================= -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

</head>
<body>

    <header>

        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">

            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

                <a href="{{ route('site.home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-7" alt="ezequiel-tzofehher">
                    <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">
                            Laravel Communyti Forum
                        </span>
                </a>

                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">
                            Open main menu
                        </span>
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                        </svg>
                    </button>

                </div> <!-- flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse -->

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">

                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-default rounded-base bg-neutral-secondary-soft md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary">

                        <li>
                            <a href="{{ route('site.home') }}" class="block py-2 px-3 text-dark bg-brand rounded-sm md:bg-transparent md:text-fg-brand md:p-0" aria-current="page">
                                Início
                            </a>
                        </li>

                        @if (auth()->check())

                            <li>
                                <a href="{{ route('timeline') }}" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">
                                    Timeline
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('profile.show') }}" class="bg-gray-900 text-white px-6 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition">
                                    Meu Perfil
                                </a>
                            </li>

                        @else

                            <li>
                                <a href="{{ route('login') }}" class="bg-gray-900 text-white px-6 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition">
                                    Login/Cadastro
                                </a>
                            </li>

                        @endif

                    </ul> <!-- flex flex-col p-4 md:p-0 mt-4 font-medium border border-default rounded-base bg-neutral-secondary-soft md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary -->

                </div> <!-- items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky -->

            </div> <!-- max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 -->

        </nav> <!-- bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 -->

    </header> <!-- -->

    <main>

        {{ $slot }}

    </main>

    <!-- ================= FLOWBITE JS ================= -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <script>
        function toggleLike(element) {
            const icon = element.querySelector('.like-icon');
            const count = element.querySelector('.like-count');

            element.classList.toggle('text-blue-600');
            icon.classList.toggle('text-blue-600');

            if (element.classList.contains('liked')) {
                element.classList.remove('liked');
                count.textContent = parseInt(count.textContent) - 1;
            } else {
                element.classList.add('liked');
                count.textContent = parseInt(count.textContent) + 1;
            }
        }
    </script>

    @livewireScripts
</body>
</html>
