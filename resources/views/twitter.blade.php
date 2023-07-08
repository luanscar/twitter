<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js']) @livewireStyles
</head>

<body class="h-full bg-slate-900 font-sans text-white antialiased">

    <div class="container mx-auto grid h-full grid-cols-4">


        <!-- MENU -->
        <div class="pt-px text-[#d6d9db] space-y-2 flex flex-col">

            <x-menu.item route="/" icon="twitter" />
            <x-menu.item route="/timeline" title="Home" icon="home" />
            <x-menu.item route="/explore" title="Explore" icon="explore" />
            <x-menu.item route="/notifications" title="Notifications" icon="notifications" />
            <x-menu.item route="/messages" title="Messages" icon="messages" />
            <x-menu.item route="/bookmarks" title="Bookmarks" icon="bookmarks" />
            <x-menu.item route="/subscribe" title="Twitter Blue" icon="twitter-blue" />
            <x-menu.item route="/verified-organization" title="Verified Organization" icon="verified-org" />
            <x-menu.item route="/profile" title="Profile" icon="profile" />
            <x-menu.item route="/more" title="More" icon="more" />
            <x-btn.tweet>
                Tweet
            </x-btn.tweet>

        </div>

        <!-- END MENU -->

        <div class="relative col-span-2 border-x-[0.625px]">2</div>
        <div class="mt-2 space-y-6 pl-6"></div>
    </div>


    @livewireScripts
</body>

</html>
