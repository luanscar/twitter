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

<body class="h-full bg-black font-sans text-white antialiased">

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
            <x-btn.tweet class='mt-6'>
                Tweet
            </x-btn.tweet>

        </div>
        <!-- END MENU -->

        {{-- CENTER --}}
        <div class="col-span-2  relative border-x-[0.625px] border-lines">

            <div class="w-full sticky  top-0 backdrop-blur-xl">
                <div class="flex-1 m-2">
                    <h2 class="-m-2 px-4 py-2 text-xl font-semibold text-white">Home</h2>
                </div>


                <ul
                    class="w-full grid grid-cols-2 text-center text-lg text-bold text-gray-500 border-b-[0.625px] border-lines">
                    <li class="pt-4 cursor-pointer hover:bg-[#e7e9ea1a] flex justify-center">
                        <div class="border-b-4 w-fit border-twitter">For You</div>
                    </li>
                    <li class="pt-4 cursor-pointer hover:bg-[#e7e9ea1a] flex justify-center">
                        <div class="border-b-4 w-fit border-transparent">Following</div>
                    </li>
                </ul>
            </div>



            <div class="border-b-[0.625px] border-lines  w-full py-2">
                <livewire:tweet.create />
            </div>
            <div class="text-center text-twitter text-lg font-bold py-3 cursor-pointer">Show 250 Tweets</div>

            <livewire:timeline />
        </div>
        {{-- END CENTER --}}

        {{-- RIGHT SIDE --}}
        <div class="mt-2 pl-6 space-y-6">
            <div class="fixed top-0 pt-2">
                <x-icons.search class="absolute mt-[15px] ml-5 w-5 fill-neutral-500" />
                <input type="text" placeholder="Search"
                    class="
                bg-neutral-900 rounded-full font-bold
                focus:outline-none shadow h-12 px-14
                border-none w-full
           ">
            </div>
        </div>
        {{-- END SIDE --}}
    </div>





    @livewireScripts
</body>

</html>
