<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Greeting | {{ config('app.name', 'Laravel') }}</title>
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
        <div class="mx-auto flex min-h-screen max-w-4xl flex-col justify-center px-6 py-10">
            <div class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-xl shadow-slate-200/70 sm:p-10">
                <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.25em] text-slate-500">Greeting Page</p>
                        <h1 class="mt-4 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">Hello! Welcome to my Laravel App.</h1>
                    </div>
                    <a href="/" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">Back to Home</a>
                </div>

                <p class="mt-8 max-w-2xl text-base leading-8 text-slate-600">This page is styled with Tailwind CSS and uses the Laravel Vite integration. The frontend now has a clean responsive layout and consistent design language.</p>

                <div class="mt-10 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                        <h2 class="text-lg font-semibold text-slate-900">Fast setup</h2>
                        <p class="mt-3 text-sm text-slate-600">Tailwind CSS is already installed and configured in the Laravel project with @tailwindcss/vite.</p>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                        <h2 class="text-lg font-semibold text-slate-900">Ready to extend</h2>
                        <p class="mt-3 text-sm text-slate-600">Use utility classes to update other blade views and create nice components across your app.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
