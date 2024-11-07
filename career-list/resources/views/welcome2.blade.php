<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CareerList</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" id="favicon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <header>
        <div class="bg-light_navy border-b border-turquoise fixed top-0 left-0 right-0 z-10 w-full">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                                <img src="{{ asset('img/Logo.png') }}" class="rounded-full" width="50" height="50" />
                        </div>
                    </div>

                    @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                
                                <a href="{{ route('login') }}" class="text-white flex items-center hover:text-gray-300">
                                    ログイン
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-white flex items-center hover:text-gray-300 ml-8">
                                        サインイン
                                    </a>
                                @endif

                            </nav>
                        @endif
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="min-h-screen bg-navy mt-16 text-white">
            <div class="flex justify-center">
                <img src="{{ asset('img/welcome.png') }}" alt="welcome" class="w-1/3">
            </div>

            <div class="w-1/4 mx-auto border border-turquoise"></div>

                <h1 class="flex justify-center items-center mt-6">CareerListとは</h1>

                <p class="flex justify-center items-center mt-6">
                    CareerListは、自分の受けている企業の情報をまとめて
                </p>
                <p class="flex justify-center items-center mt-2">
                    リスト化することができるサービスです
                </p>

        </div>
    </main>
    
</body>
</html>