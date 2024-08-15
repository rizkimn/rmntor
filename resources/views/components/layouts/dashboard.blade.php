<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite("resources/css/app.css")

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="bg-light flex min-h-[100vh]">
        <div class="flex w-full">
            <livewire:rmntor.sidebar />
            <div class="w-full">
                <nav class="toolbar w-full min-h-[66px] flex justify-between items-center p-4">
                    {{-- Because she competes with no one, no one can compete with her. --}}
                    {{ $toolbar }}
                </nav>
                <main class="bg-[#ffffff] p-[36px] rounded-ss-[36px] h-full">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
