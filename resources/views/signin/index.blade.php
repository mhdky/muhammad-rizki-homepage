<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muhammad Rizki Home Page - Admin</title>

    <meta name="description" content="Muhammad Rizki Official Website">
    <meta name="keywords" content="muhammad rizki">
    <meta name="author" content="Muhammad Rizki">
    <meta itemprop="name" content="Muhammad Rizki - Homepage">
    <meta itemprop="description" content="Muhammad Rizki Official Website">
    <meta itemprop="image" content="{{ asset('img/logo.png') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://mhdrizki.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Muhammad Rizki - Homepage">
    <meta property="og:description" content="Muhammad Rizki Official Website">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Muhammad Rizki - Homepage">
    <meta name="twitter:description" content="Muhammad Rizki Official Website">
    <meta name="twitter:image" content="{{ asset('img/logo.png') }}">

    <link rel="icon" type="image" href="{{ asset('img/logo.png') }}">

    @vite('resources/css/app.css')
</head>
<body class="bg-body">
    {{-- sign in mobile --}}
    <div class="fixed top-0 right-0 bottom-0 left-0 flex flex-col justify-center items-center md-900:hidden">

        {{-- logo --}}
        <a href="/" class="w-[70%] mb-5 sm-370:w-[300px]">
            <img src="{{ asset('img/logo-muhammad-rizki.png') }}" alt="logo muhammad rizki">
        </a>

        <form action="/admin" method="POST" autocomplete="off" class="bg-black-follow w-[95%] p-5 rounded-[20px] sm-370:w-[350px]">
            @csrf
            {{-- username --}}
            <div class="w-full mb-7">
                <div class="flex justify-between items-center mb-3">                    
                    @error('username')
                        <p class="text-red-700 font-bold">Username</p>    
                    @else
                        <p class="font-bold">Username</p>
                    @enderror
                </div>
                @error('username')
                    <input type="text" name="username" class="bg-[#242426] w-full h-[45px] px-5 rounded-[20px] focus:outline-none focus:bg-[#2D2D2F] border border-red-700">
                @else
                    <input type="text" name="username" class="bg-[#242426] w-full h-[45px] px-5 rounded-[20px] focus:outline-none focus:bg-[#2D2D2F]">
                @enderror
            </div>

            {{-- password --}}
            <div class="w-full mb-7">
                <div class="flex justify-between items-center mb-3">
                    @error('password')
                        <p class="text-red-700 font-bold">Password</p>    
                    @else
                        <p class="font-bold">Password</p>
                    @enderror
                </div>
                @error('password')
                    <input type="password" name="password" class="bg-[#242426] w-full h-[45px] px-5 rounded-[20px] focus:outline-none focus:bg-[#2D2D2F] border border-red-700">
                @else
                    <input type="password" name="password" class="bg-[#242426] w-full h-[45px] px-5 rounded-[20px] focus:outline-none focus:bg-[#2D2D2F]">
                @enderror
            </div>

            <button type="submit" class="bg-[#242426] w-full h-[45px] mb-3 flex justify-center items-center rounded-[20px] hover:bg-[#2D2D2F]">
                <p class="font-bold">Sign in</p>
                <span class="bg-white-primary w-[30px] h-[1px] mx-1"></span>
                <span class="bg-white-primary w-[7px] h-[7px] rounded-full"></span>
            </button>
        </form>
    </div>

    {{-- sign in desktop --}}
    <div class="hidden fixed top-0 right-0 bottom-0 left-0 justify-center md-900:flex">
        <div class="w-[90%] h-full flex justify-center items-center relative md-950:w-[950px]">
            {{-- form sign in desktop --}}
            <form action="/admin" method="POST" autocomplete="off" class="bg-black-follow w-[350px] h-[325px] p-7 rounded-[20px]">
                @csrf
                {{-- username --}}
                <div class="mb-5">
                    <div class="flex justify-between items-center mb-3">
                        @error('username')
                            <p class="text-red-700 font-bold">Username</p>
                        @else
                            <p class="font-bold">Username</p>
                        @enderror
                    </div>
                    @error('username')
                        <input type="text" name="username" value="{{ old('username') }}" onkeyup="chechPassword()" class="inputUsername bg-[#242426] w-full h-[45px] px-5 rounded-[20px] focus:outline-none focus:bg-[#2D2D2F] hover:bg-[#2D2D2F] cursor-default border border-red-700">
                    @else 
                        <input type="text" name="username" onkeyup="chechPassword()" class="inputUsername bg-[#242426] w-full h-[45px] px-5 rounded-[20px] focus:outline-none focus:bg-[#2D2D2F] hover:bg-[#2D2D2F] cursor-default">
                    @enderror
                </div>

                {{-- password --}}
                <div class="mb-7">
                    <div class="flex justify-between items-center mb-3">
                        @error('password')
                            <p class="text-red-700 font-bold">Password</p>
                        @else
                            <p class="font-bold">Password</p>
                        @enderror
                    </div>
                    @error('password')
                        <input type="password" name="password" onkeyup="chechPassword()" class="inputPassword bg-[#242426] w-full h-[45px] px-5 rounded-[20px] focus:outline-none focus:bg-[#2D2D2F] hover:bg-[#2D2D2F] cursor-default border border-red-700">
                    @else
                        <input type="password" name="password" onkeyup="chechPassword()" class="inputPassword bg-[#242426] w-full h-[45px] px-5 rounded-[20px] focus:outline-none focus:bg-[#2D2D2F] hover:bg-[#2D2D2F] cursor-default">
                    @enderror
                </div>

                <button type="submit" disabled class="btnPassword bg-[#242426] w-full h-[45px] flex justify-center items-center rounded-[20px] opacity-30">
                    <p class="font-bold">Sign In</p>
                    <span class="bg-white-primary w-[30px] h-[1px] mx-1"></span>
                    <span class="bg-white-primary w-[7px] h-[7px] rounded-full"></span>
                </button>
            </form>

            {{-- logo kiri --}}
            <div class="h-full absolute left-0 top-0">
                <div class="h-full relative flex items-center">
                    <div class="h-[325px]">
                        <a href="/" class="flex flex-col items-center">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-[50px] bg-body -mt-3 pt-3">
                            <h1 class="bg-body py-3 text-xl font-bold">MUHAMMAD RIZKI</h1>
                        </a>
                    </div>

                    <span class="bg-black-follow w-0.5 h-full absolute top-0 left-1/2 -z-10"></span>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('gagal'))
        <p class="bg-red-700 w-full h-8 flex z-50 justify-center items-center px-5 fixed top-0">{{ session('gagal') }}</p>
    @endif

    <script>
        function chechPassword() {
            const inputUsername = document.querySelector('.inputUsername');
            const inputPassword = document.querySelector('.inputPassword');
            const btnPassword = document.querySelector('.btnPassword');

            if(inputUsername.value.length > 9 && inputPassword.value.length > 4) {
                btnPassword.disabled = false;
                btnPassword.style.opacity = '1';
            } else {
                btnPassword.disabled = true;
                btnPassword.style.opacity = '0.3';
            }
        }
    </script>
</body>
</html>