<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>    

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
    <div class="w-full flex">
        {{-- header mobile --}}
        <div class="bg-black-about w-full h-14 px-3 flex justify-between items-center fixed top-0 md-768:px-5 lg-1000:hidden">
            <a href="/admin/about" class="flex items-center">
                <img src="{{ asset('img/logo_dua.png') }}" alt="Logo" class="w-[30px] mr-2">
                <h1 class="text-lg font-bold">MUHAMMAD RIZKI</h1>
            </a>

            {{-- burger button --}}
            <div class="burger-button w-7 h-[22px] flex flex-col justify-between">
                <span class="bg-white-primary w-full h-1 rounded-md"></span>
                <span class="bg-white-primary w-full h-1 rounded-md"></span>
                <span class="bg-white-primary w-full h-1 rounded-md"></span>
            </div>
        </div>

        {{-- nav-mobile --}}
        <div class="nav-mobile-admin -translate-x-full duration-300 bg-black-follow w-60 h-screen flex flex-col justify-between fixed z-50 left-0 lg-1000:hidden">
            {{-- logo and list --}}
            <div class="w-full">
                {{-- logo --}}
                <a href="/" class="flex flex-col items-center my-10">
                    <img src="{{ asset('img/logo_dua.png') }}" alt="" class="w-[50px]">
                    <h1 class="text-lg font-bold mt-3">MUHAMMAD RIZKI</h1>
                </a>

                {{-- list --}}
                <ul>
                    <li class="mb-[1px] py-2 text-center {{ (Request::is('admin/about*') ? 'bg-black-list-admin-active' : 'bg-black-list-admin') }}"><a href="/admin/about" class="w-full inline-block">About</a></li>
                    <li class="mb-[1px] py-2 text-center {{ (Request::is('admin/skill*') ? 'bg-black-list-admin-active' : 'bg-black-list-admin') }}"><a href="/admin/skill" class="w-full inline-block">Skills</a></li>
                    <li class="mb-[1px] py-2 text-center {{ (Request::is('admin/portfolio*') ? 'bg-black-list-admin-active' : 'bg-black-list-admin') }}"><a href="/admin/portfolio" class="w-full inline-block">Portfolio</a></li>
                    <li class="mb-[1px] py-2 text-center {{ (Request::is('admin/contact*') ? 'bg-black-list-admin-active' : 'bg-black-list-admin') }}"><a href="/admin/contact" class="w-full inline-block">Contact</a></li>
                    <li class="mb-[1px] py-2 text-center {{ (Request::is('admin/social*') ? 'bg-black-list-admin-active' : 'bg-black-list-admin') }}"><a href="/admin/social" class="w-full inline-block">Media Sosial</a></li>
                </ul>
            </div>

            {{-- signout --}}
            <form action="/signout" method="post">
                @csrf
                <button type="submit" class="bg-red-delete w-full py-2">Sign Out</button>
            </form>
        </div>

        {{-- nav-desktop --}}
        <div class="bg-black-follow w-[240px] h-screen hidden flex-col justify-between sticky top-0 lg-1000:flex">
            {{-- logo and list --}}
            <div class="w-full">
                {{-- logo --}}
                <a href="/" class="flex flex-col items-center my-10">
                    <img src="{{ asset('img/logo_dua.png') }}" alt="" class="w-[50px]">
                    <h1 class="text-lg font-bold mt-3">MUHAMMAD RIZKI</h1>
                </a>

                {{-- list --}}
                <ul>
                    <li class="mb-[1px] py-2 text-center {{ (Request::is('admin/about*') ? 'bg-black-list-admin-active' : 'bg-black-list-admin') }} hover:bg-black-list-admin-active"><a href="/admin/about" class="w-full inline-block">About</a></li>
                    <li class="mb-[1px] py-2 text-center {{ (Request::is('admin/skill*') ? 'bg-black-list-admin-active' : 'bg-black-list-admin') }} hover:bg-black-list-admin-active"><a href="/admin/skill" class="w-full inline-block">Skills</a></li>
                    <li class="mb-[1px] py-2 text-center {{ (Request::is('admin/portfolio*') ? 'bg-black-list-admin-active' : 'bg-black-list-admin') }} hover:bg-black-list-admin-active"><a href="/admin/portfolio" class="w-full inline-block">Portfolio</a></li>
                    <li class="mb-[1px] py-2 text-center {{ (Request::is('admin/contact*') ? 'bg-black-list-admin-active' : 'bg-black-list-admin') }} hover:bg-black-list-admin-active"><a href="/admin/contact" class="w-full inline-block">Contact</a></li>
                    <li class="mb-[1px] py-2 text-center {{ (Request::is('admin/social*') ? 'bg-black-list-admin-active' : 'bg-black-list-admin') }} hover:bg-black-list-admin-active"><a href="/admin/social" class="w-full inline-block">Media Sosial</a></li>
                </ul>
            </div>

            {{-- signout --}}
            <form action="/signout" method="post">
                @csrf
                <button type="submit" class="bg-red-delete w-full py-2">Sign Out</button>
            </form>
        </div>

        <div class="w-full h-max mt-16 p-2 flex-[2] lg-1000:mt-0 lg-1000:p-5">
            @yield('main')
        </div>
    </div>

    @yield('delete-contact')

    @yield('add-portfolio')

    @if (session()->has('berhasil'))
        <div class="alert-admin-content w-full flex justify-center fixed bottom-5">
            <p class="bg-white-primary px-5 py-3 rounded-[20px] text-black-follow font-bold">{{ session('berhasil') }}</p>
        </div>
    @endif

    <script src="{{ asset('js/script-admin.js') }}"></script>
    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>