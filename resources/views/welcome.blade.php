<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
            </style>
        @endif
    </head>
    <body class="min-h-screen bg-slate-50 text-slate-900 antialiased">
        <div class="mx-auto flex min-h-screen max-w-6xl flex-col px-6 py-8 lg:px-10 lg:py-12">
            <header class="sticky top-0 z-20 rounded-3xl border border-slate-200 bg-white/80 px-5 py-4 shadow-sm backdrop-blur-lg backdrop-saturate-150 lg:px-8 lg:py-5">
                <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">CruzMModel</p>
                        <h1 class="mt-2 text-2xl font-semibold text-slate-900 sm:text-3xl">Laravel + Tailwind Frontend</h1>
                    </div>

                    <nav class="flex flex-wrap items-center gap-3 text-sm text-slate-700">
                        <a href="/" class="rounded-full border border-slate-300 bg-slate-100 px-4 py-2 transition hover:bg-slate-200">Home</a>
                        <a href="/greet" class="rounded-full border border-slate-300 bg-white px-4 py-2 transition hover:bg-slate-100">Greet</a>
                        <a href="/tasks" class="rounded-full border border-slate-300 bg-white px-4 py-2 transition hover:bg-slate-100">Tasks</a>
                        <a href="/posts" class="rounded-full border border-slate-300 bg-white px-4 py-2 transition hover:bg-slate-100">Posts</a>
                    </nav>
                </div>
            </header>

            <main class="mt-10 flex flex-1 flex-col justify-between gap-10 lg:mt-12">
                <section class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-center lg:gap-12">
                    <div class="space-y-6">
                        <p class="inline-flex items-center rounded-full bg-sky-100 px-4 py-2 text-sm font-medium text-sky-800 ring-1 ring-sky-200">Tailwind CSS is ready</p>
                        <div class="space-y-4">
                            <h2 class="text-4xl font-bold tracking-tight text-slate-950 sm:text-5xl">Build clean, responsive Laravel pages with Tailwind</h2>
                            <p class="max-w-2xl text-lg leading-8 text-slate-600">This app now uses Tailwind CSS via Vite. The landing page and greet page have been upgraded with modern utility-based styling and responsive layout.</p>
                        </div>

                        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                            <a href="/greet" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-slate-900/10 transition hover:bg-slate-700">View Greeting</a>
                            <a href="/tasks" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:border-slate-400 hover:bg-slate-50">Browse Tasks</a>
                        </div>
                    </div>

                    <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-sm shadow-slate-200/80 lg:p-8">
                        <h3 class="text-xl font-semibold text-slate-900">What you can do</h3>
                        <ul class="mt-6 space-y-4 text-slate-600">
                            <li class="flex gap-3"><span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-sky-500"></span><span>Use Tailwind utility classes across blade views</span></li>
                            <li class="flex gap-3"><span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-sky-500"></span><span>Edit and style the frontend using Laravel blade templates</span></li>
                            <li class="flex gap-3"><span class="mt-1 inline-flex h-2.5 w-2.5 rounded-full bg-sky-500"></span><span>Run <code class="rounded bg-slate-100 px-2 py-1 text-xs font-medium text-slate-700">npm run dev</code> to rebuild assets</span></li>
                        </ul>
                    </div>
                </section>

                <section class="grid gap-6 md:grid-cols-2">
                    <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                        <h3 class="text-xl font-semibold text-slate-900">Responsive layout</h3>
                        <p class="mt-3 text-slate-600">Tailwind utilities help you create a layout that works on mobile and desktop with minimal custom CSS.</p>
                    </article>
                    <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                        <h3 class="text-xl font-semibold text-slate-900">Laravel integration</h3>
                        <p class="mt-3 text-slate-600">This project uses Laravel's Vite integration plus Tailwind CSS for fast asset bundling and hot reloading.</p>
                    </article>
                </section>
            </main>

            <footer class="mt-12 rounded-3xl border border-slate-200 bg-white p-6 text-slate-600 shadow-sm">
                <p class="text-center text-sm">Created for the CruzMModel assignment. Tailwind CSS is installed and ready to use in the Blade frontend.</p>
            </footer>
        </div>
    </body>
</html>
