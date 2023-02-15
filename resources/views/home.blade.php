<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Rizki - Home Page</title>

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

<body class="bg-body" id="home">
    <!-- nav mobile -->
    <div class="nav-mobile bg-black-nav w-full fixed z-30 bottom-0 py-3 flex justify-evenly items-center md-768:hidden">
        <a href="#about" class="text-black-list text-sm font-bold hover:text-white-primary cursor-default md-768:cursor-pointer">About</a>
        <span class="bg-[#484e53] w-[1px] h-2"></span>
        <a href="#skills" class="text-black-list text-sm font-bold hover:text-white-primary cursor-default md-768:cursor-pointer">Skills</a>
        <span class="bg-[#484e53] w-[1px] h-2"></span>
        <a href="#portfolio" class="text-black-list text-sm font-bold hover:text-white-primary cursor-default md-768:cursor-pointer">Portfolio</a>
        <span class="bg-[#484e53] w-[1px] h-2"></span>
        <a href="#contact" class="text-black-list text-sm font-bold hover:text-white-primary cursor-default md-768:cursor-pointer">Contact</a>
    </div>

    <!-- nav desktop -->
    <div class="hidden w-full md-768:flex justify-center fixed z-30 top-0">
        <div class="nav-desktop mt-7 flex">
            <!-- profile -->
            <a href="#home" class="">
                <img src="{{ asset('img/profil-1.png') }}" alt="Muhammad Rizki"
                    class="w-[50px] h-max mr-3 cursor-pointer rounded-full">
            </a>

            <!-- list nav -->
            <div class="bg-black-nav w-[405px] h-12 flex justify-evenly items-center rounded-[20px] ">
                <a href="#about" class="text-black-list hover:text-white-primary">About</a>
                <a href="#skills" class="text-black-list hover:text-white-primary">Skills</a>
                <a href="#portfolio" class="text-black-list hover:text-white-primary">Portfolio</a>
                <a href="#contact" class="text-black-list hover:text-white-primary">Contact</a>
            </div>
        </div>
    </div>

    <!-- about -->
    <div class="w-full flex flex-col pt-4 md-768:flex-row md-768:pt-[150px] lg-1000:w-[1000px] lg-1000:mx-auto"
        id="about">
        <!-- profile and follow me -->
        <div class="flex flex-col justify-center md-768:order-2 md-768:w-[40%] md-768:mx-5 md-768:justify-start md-768:items-center md-768:relative lg-1080:mr-0 lg-1080:w-[35%]">
            <!-- profile -->
            <img src="{{ asset('img/profil-2.png') }}" alt="Profile Muhammad Rizki" class="mx-3 md-768:mx-0 md-768:w-[80%] md-768:absolute md-768:z-20">

            <!-- follow me -->
            <div class="px-3 md-768:bg-black-follow md-768:w-full md-768:absolute md-768:top-[20vw] md-768:rounded-[20px] md-768:px-[4vw] md-768:pb-[4vw] lg-1000:top-[200px] lg-1000:px-[35px] lg-1000:pb-[35px]">
                <!-- section name -->
                <div class="flex justify-between items-center mt-7 md-768:mt-[13vw] lg-1000:mt-[130px] lg-1080:mt-[110px]">
                    <p class="w-[95px] font-bold">Find me on</p>
                    <span class="bg-white-primary h-[1px] flex-[2] w-full"></span>
                </div>

                <!-- instagram -->
                <a href="{{ $medsos->instagram }}" class="flex items-center mt-4 cursor-default md-768:cursor-pointer">
                    <i class="fa-brands fa-instagram"></i>
                    <p class="text-sm font-bold ml-3">Instagram</p>
                </a>

                <!-- LinkedIn -->
                <a href="{{ $medsos->linkedin }}"
                    class="flex items-center mt-2 cursor-default md-768:cursor-pointer md-950:mt-3">
                    <i class="fa-brands fa-linkedin-in"></i>
                    <p class="text-sm font-bold ml-3">LinkedIn</p>
                </a>

                <!-- github -->
                <a href="{{ $medsos->github }}" class="flex items-center mt-2 cursor-default md-768:cursor-pointer md-950:mt-3">
                    <i class="fa-brands fa-github"></i>
                    <p class="text-sm font-bold ml-3">Github</p>
                </a>

                <!-- email -->
                <a href="{{ $medsos->email }}" class="flex items-center mt-2 cursor-default md-768:cursor-pointer md-950:mt-3">
                    <i class="fa-regular fa-envelope"></i>
                    <p class="text-sm font-bold ml-3">E-Mail</p>
                </a>

                <div class="flex justify-between items-center mt-5">
                    <span
                        class="bg-white-primary w-[94%] h-[1px] sm-410:w-[95%] sm-450:w-[96%] sm-650:w-[97%] md-768:w-[92%] md-860:w-[93%] lg-1000:w-[94%]"></span>
                    <span class="bg-white-primary w-3 h-3 rounded-full"></span>
                </div>
            </div>
        </div>

        <!-- about and introduce -->
        <div class="mt-3 px-3 md-768:order-1 md-768:mt-0 md-768:w-[60%] md-768:px-5 lg-1080:pl-0">
            <h1 class="text-black-about text-[50px] font-bold md-768:text-[96px] md-768:-mt-10">ABOUT</h1>

            <h2 class="intro text-[25px] font-bold leading-[30px] md-768:text-[40px] md-768:leading-[43px]">I’m Muhammad
                Rizki. I live in Medan Indonesia</h2>

            {{-- paragraf 1 --}}
            <p class="mt-4 md-950:mt-7 md-950:leading-[26px]">{{ $about->paragraf_one }}</p>

            {{-- paragraf 2 --}}
            <p class="mt-3 md-950:leading-[26px]">{{ $about->paragraf_two }}</p>

            {{-- paragraf 3 --}}
            <p class="mt-3 md-950:leading-[26px]">{{ $about->paragraf_three }}</p>

            <a href="{{ $medsos->cv }}"
                class="w-max bg-black-follow mt-5 py-3 px-5 rounded-[20px] flex items-center cursor-default md-768:cursor-pointer hover:bg-black-nav">
                <p class="text-sm font-semibold">Download CV</p>
                <span class="bg-white-primary w-[40px] h-[1px] ml-2"></span>
                <span class="bg-white-primary w-2 h-2 rounded-full ml-1"></span>
            </a>
        </div>
    </div>

    <!-- skills -->
    <div class="pt-10 px-3 md-768:px-5 lg-1000:w-[1000px] lg-1000:mx-auto lg-1080:pl-0" id="skills">
        <h1 class="text-black-about text-[50px] font-bold md-768:text-[96px]">SKILLS</h1>

        <section>
            <!-- programming language -->
            <div class="flex items-center">
                <h2 class="w-[216px] text-[18px] mr-2 font-bold">Programming Language</h2>
                <div class="bg-white-primary flex-[2] w-full h-[1px]"></div>
            </div>

            {{-- technology --}}
            <div class="flex flex-wrap mt-5">
                {!! $skill->programming_language !!}
            </div>

            <!-- backend -->
            <div class="flex items-center mt-7">
                <h2 class="w-[80px] text-[18px] mr-2 font-bold">Backend</h2>
                <div class="bg-white-primary flex-[2] w-full h-[1px]"></div>
            </div>
            
            {{-- technology --}}
            <div class="flex flex-wrap mt-5">
                {!! $skill->backend !!}
            </div>

            <!-- frontend -->
            <div class="flex items-center mt-7">
                <h2 class="w-[80px] text-[18px] mr-2 font-bold">Frontend</h2>
                <div class="bg-white-primary flex-[2] w-full h-[1px]"></div>
            </div>

            {{-- technology --}}
            <div class="flex flex-wrap mt-5">
                {!! $skill->frontend !!}
            </div>

            <!-- database orm -->
            <div class="flex items-center mt-7">
                <h2 class="w-[138px] text-[18px] mr-2 font-bold">Database ORM</h2>
                <div class="bg-white-primary flex-[2] w-full h-[1px]"></div>
            </div>

            {{-- technology --}}
            <div class="flex flex-wrap mt-5">
                {!! $skill->database !!}
            </div>

            <!-- other -->
            <div class="flex items-center mt-7">
                <h2 class="w-[50px] text-[18px] mr-2 font-bold">Other</h2>
                <div class="bg-white-primary flex-[2] w-full h-[1px]"></div>
            </div>

            {{-- technology --}}
            <div class="flex flex-wrap mt-5">
                {!! $skill->other !!}
            </div>
        </section>

    </div>

    <!-- portfolio -->
    <div class="pt-10 px-3 md-768:px-5 lg-1000:w-[1000px] lg-1000:mx-auto lg-1080:px-0" id="portfolio">
        <h1 class="text-black-about text-[50px] font-bold md-768:text-[96px]">PORTFOLIO</h1>

        <!-- container card portfolio -->
        <div class="flex flex-wrap justify-center mt-2 sm-560:justify-between">
            <!-- Anisa Collection Clothing Store -->            
            @foreach ($portfolios as $portfolio)
                <div class="w-[96%] mb-10 sm-560:w-[49%] md-860:w-[32%] md-860:mb-10">
                    <div class="bg-black-follow w-full mb-5 rounded-[10px] relative">
                        <!-- poster -->
                        <img src="{{ asset('storage/' . $portfolio->poster) }}" alt="{{ Str::upper($portfolio->web_name) }}" class="w-full rounded-[10px]">

                        <!-- judul -->
                        <div class="bg-[#15182beb] w-full h-[30%] absolute -bottom-[1px] rounded-tr-[30px] rounded-b-[10px] flex justify-center items-center text-center font-bold px-[6px] sm-390:hidden">
                            {{ Str::limit(Str::upper($portfolio->web_name), 27) }}
                        </div>
                        <div class="bg-[#15182beb] w-full h-[30%] absolute -bottom-[1px] rounded-tr-[30px] rounded-b-[10px] hidden justify-center items-center text-center font-bold px-[6px] sm-390:flex sm-412:hidden">
                            {{ Str::limit(Str::upper($portfolio->web_name), 32) }}
                        </div>
                        <div class="bg-[#15182beb] w-full h-[30%] absolute -bottom-[1px] rounded-tr-[30px] rounded-b-[10px] hidden justify-center items-center text-center font-bold px-[6px] sm-412:flex sm-480:hidden">
                            {{ Str::limit(Str::upper($portfolio->web_name), 34) }}
                        </div>
                        <div class="bg-[#15182beb] w-full h-[30%] absolute -bottom-[1px] rounded-tr-[30px] rounded-b-[10px] hidden justify-center items-center text-center font-bold px-[6px] sm-480:flex sm-550:hidden">
                            {{ Str::limit(Str::upper($portfolio->web_name), 40) }}
                        </div>
                        <div class="bg-[#15182beb] w-full h-[30%] absolute -bottom-[1px] rounded-tr-[30px] rounded-b-[10px] hidden justify-center items-center text-center font-bold px-[6px] sm-550:flex sm-560:hidden">
                            {{ Str::limit(Str::upper($portfolio->web_name), 48) }}
                        </div>
                        <div class="bg-[#15182beb] w-full h-[30%] absolute -bottom-[1px] rounded-tr-[30px] rounded-b-[10px] hidden justify-center items-center text-center font-bold px-[6px] sm-560:flex sm-650:hidden">
                            {{ Str::limit(Str::upper($portfolio->web_name), 20) }}
                        </div>
                        <div class="bg-[#15182beb] w-full h-[30%] absolute -bottom-[1px] rounded-tr-[30px] rounded-b-[10px] hidden justify-center items-center text-center font-bold px-[6px] sm-650:flex md-768:hidden">
                            {{ Str::limit(Str::upper($portfolio->web_name), 27) }}
                        </div>
                        <div class="bg-[#15182beb] w-full h-[30%] absolute -bottom-[1px] rounded-tr-[30px] rounded-b-[10px] hidden justify-center items-center text-center font-bold px-[6px] md-768:flex md-860:hidden">
                            {{ Str::limit(Str::upper($portfolio->web_name), 32) }}
                        </div>
                        <div class="bg-[#15182beb] w-full h-[30%] absolute -bottom-[1px] rounded-tr-[30px] rounded-b-[10px] hidden justify-center items-center text-center font-bold px-[6px] md-860:flex md-950:hidden">
                            {{ Str::limit(Str::upper($portfolio->web_name), 22) }}
                        </div>
                        <div class="bg-[#15182beb] w-full h-[30%] absolute -bottom-[1px] rounded-tr-[30px] rounded-b-[9px] hidden justify-center items-center text-center font-bold px-[6px] md-950:flex">
                            {{ Str::limit(Str::upper($portfolio->web_name), 27) }}
                        </div>
                    </div>

                    <!-- button -->
                    <div class="flex">
                        <!-- button detail -->
                        <div class="card-portfolio bg-[#25319F] hover:bg-[#3243D8] w-[80px] h-[32px] mr-2 rounded-[10px] flex justify-center items-center text-[12px] font-bold cursor-default md-768:cursor-pointer">Detail</div>
                        <!-- button visit -->
                        @if ($portfolio->status === 'Development')
                            <div class="no-link bg-[#138A34] hover:bg-[#20B84B] w-[80px] h-[32px] rounded-[10px] flex justify-center items-center text-[12px] font-bold cursor-default md-768:cursor-pointer">Visit</div>
                        @else
                            <a target="_blank" href="{{ $portfolio->web_link }}" class="bg-[#138A34] hover:bg-[#20B84B] w-[80px] h-[32px] rounded-[10px] flex justify-center items-center text-[12px] font-bold cursor-default md-768:cursor-pointer">Visit</a>
                        @endif
                    </div>
                </div>
            @endforeach
            <!-- maniulation -->
            <div class="w-[96%] sm-560:w-[49%] md-860:w-[32%]">
            </div>
        </div>
    </div>

    <!-- detail portfolio -->
    @foreach ($portfolios as $portfolio)
    <div class="detail-portfolio hidden flex-col justify-end bg-[#00000083] fixed z-40 top-0 right-0 bottom-0 left-0">
        {{-- container detail portfolio --}}
        <div class="containerDetailPortfolio bg-black-follow w-full h-[90vh] flex flex-col rounded-t-[20px] overflow-hidden lg-1080:w-[1080px] lg-1080:mx-auto lg-1080:shadow-xl border border-[#ffffff1c] border-b-transparent">
            {{-- header detail portfolio --}}
            <div class="bg-black-follow w-full h-12 flex justify-between items-center sticky top-0 border border-t-transparent border-r-transparent border-l-transparent border-b-[#ffffff1c]">
                <h1 class="font-bold pl-3 sm-480:hidden">{{ Str::upper(Str::limit($portfolio->web_name, 20))  }}</h1>
                <h1 class="font-bold pl-3 hidden sm-480:block sm-650:hidden">{{ Str::upper(Str::limit($portfolio->web_name, 30)) }}</h1>
                <h1 class="font-bold pl-3 hidden sm-650:block md-860:hidden">{{ Str::upper(Str::limit($portfolio->web_name, 40)) }}</h1>
                <h1 class="font-bold pl-3 hidden md-860:block lg-1000:hidden">{{ Str::upper(Str::limit($portfolio->web_name, 50)) }}</h1>
                <h1 class="font-bold pl-3 hidden lg-1000:block">{{ Str::upper(Str::limit($portfolio->web_name, 70)) }}</h1>

                <div class="close-detail-portfolio bg-[#ff000011] border border-[#ffffff1c] hover:bg-red-delete w-8 h-8 mr-3 rounded-[5px] flex justify-center items-center cursor-default md-768:cursor-pointer">
                    <i class="fas fa-times text-lg"></i>
                </div>
            </div>

            {{-- container asli portfolio detail --}}
            <div class="container-asli-portfolio-detail w-full h-full pt-3 flex flex-col overflow-auto md-768:flex-row">
                {{-- web name, technology, description --}}
                <div class="w-full px-3 md-768:order-2 md-768:pl-[6px]">
                    {{-- web name --}}
                    <div class="bg-black-nav w-full h-[35px] px-3 flex justify-between items-center">
                        <h1 class="text-black-list font-bold">Web Name</h1>
                        <i class="fas fa-sort-down text-black-list -mt-2"></i>
                    </div>
                    {{-- isi --}}
                    <h1 class="font-bold px-3 mt-3 mb-5">{{ Str::upper($portfolio->web_name) }}</h1>

                    {{-- Technology --}}
                    <div class="bg-black-nav w-full h-[35px] px-3 flex justify-between items-center">
                        <h1 class="text-black-list font-bold">Technology</h1>
                        <i class="fas fa-sort-down text-black-list -mt-2"></i>
                    </div>
                    {{-- isi --}}
                    <ul class="px-3 mt-3 font-bold">
                        {!! $portfolio->technology_one !!}
                    </ul>

                    {{-- Description --}}
                    <div class="bg-black-nav w-full h-[35px] mt-7 px-3 flex justify-between items-center">
                        <h1 class="text-black-list font-bold">Description</h1>
                        <i class="fas fa-sort-down text-black-list -mt-2"></i>
                    </div>
                    {{-- isi --}}
                    <p class="text-justify px-3 mt-3 mb-5">
                        {!! $portfolio->description !!}
                    </p>

                    @if ($portfolio->status === 'Development')
                        <div class="w-full flex justify-end items-center pb-5">
                            <div class="no-link-detail bg-[#138A34] hover:bg-[#20B84B] w-28 h-9 mr-2 text-sm font-bold flex justify-center items-center rounded-[20px] cursor-default md-768:cursor-pointer">
                                Visit
                            </div>

                            <div class="no-link-detail bg-[#25319F] hover:bg-[#3243D8] w-28 h-9 text-sm font-bold flex justify-center items-center rounded-[20px] cursor-default md-768:cursor-pointer">
                                Repository
                            </div>
                        </div>
                    @else
                        <div class="w-full flex justify-end items-center pb-5">
                            <a href="{{ $portfolio->web_link }}" target="_blank" class="bg-[#138A34] hover:bg-[#20B84B] w-28 h-9 mr-2 text-sm font-bold flex justify-center items-center rounded-[20px]">
                                Visit
                            </a>

                            <a href="{{ $portfolio->web_repo }}" target="_blank" class="bg-[#25319F] hover:bg-[#3243D8] w-28 h-9 text-sm font-bold flex justify-center items-center rounded-[20px]">
                                Repository
                            </a>
                        </div>
                    @endif
                </div>

                {{-- gambar --}}
                <div class="w-full mt-10 px-3 pb-5 md-768:order-1 md-768:pr-[6px] md-768:mt-0">
                    <img src="{{ asset('storage/' . $portfolio->img_url) }}" alt="ok" class="w-full md-768:pb-2">
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- no link portfolio -->
    <div class="masih-pengembangan fixed z-50 top-0 right-0 bottom-0 left-0 hidden justify-center items-end md-768:justify-start">
        <p
            class="masih-pengembangan-dua bg-white-primary font-bold py-3 px-4 text-black-follow rounded-[20px] ml-3 mb-5 shadow-lg shadow-black">
            Masih dalam pengembangan!</p>
    </div>

    <!-- no link portfolio detail -->
    <div class="masih-pengembangan-detail fixed z-50 top-0 right-0 bottom-0 left-0 hidden justify-center items-end md-768:justify-start">
        <p
            class="masih-pengembangan-dua-detail bg-white-primary font-bold py-3 px-4 text-black-follow rounded-[20px] ml-3 mb-5 shadow-lg shadow-black">
            Masih dalam pengembangan!</p>
    </div>

    {{-- contact --}}
    <div class="w-full pt-10 px-3 md-768:mx-auto md-768:px-5 lg-1000:w-[1000px] lg-1080:px-0" id="contact">
        <h1 class="text-black-about text-[50px] font-bold md-768:text-[96px]">CONTACT</h1>

        {{-- contact form --}}
        <form action="/contact" method="POST" autocomplete="off" class="w-full mt-3">
            @csrf
            {{-- name --}}
            <div class="mb-7">
                <div class="flex items-center">
                    <p class="mr-1 font-bold">Name</p>
                    <span class="bg-white-primary w-[50px] h-[1px]"></span>
                </div>

                {{-- keterangan Name --}}
                <p class="keteranganName text-[#686868] text-sm hidden">Masukan minimal 3 karakter</p>

                {{-- error --}}
                @error('name')
                    <p class="mt-2 text-red-700 text-sm">{{ $message }}</p>
                @enderror

                @error('name')
                    <input type="text" name="name" maxlength="30" value="{{ old('name') }}" required onkeyup="messageCheck()" class="inputName bg-black-follow w-full h-[45px] mt-3 rounded-[20px] px-5 focus:outline-none focus:bg-black-nav border border-red-700 focus:border-transparent">
                @else
                    <input type="text" name="name" maxlength="30" required value="{{ old('name') }}" onkeyup="messageCheck()" class="inputName bg-black-follow w-full h-[45px] mt-3 rounded-[20px] px-5 focus:outline-none focus:bg-black-nav">
                @enderror
            </div>

            {{-- email --}}
            <div class="mb-7">
                <div class="flex items-center">
                    <p class="mr-1 font-bold">Email</p>
                    <span class="bg-white-primary w-[50px] h-[1px]"></span>
                </div>

                {{-- keterangan Email --}}
                <p class="keteranganEmail text-[#686868] text-sm hidden">Masukan format email</p>

                {{-- error --}}
                @error('email')
                    <p class="mt-2 text-red-700 text-sm">{{ $message }}</p>
                @enderror

                @error('email')
                    <input type="email" name="email" maxlength="255" value="{{ old('email') }}" required onkeyup="messageCheck()" class="inputEmail bg-black-follow w-full h-[45px] mt-3 rounded-[20px] px-5 focus:outline-none focus:bg-black-nav border border-red-700 focus:border-transparent">
                @else
                    <input type="email" name="email" maxlength="255" value="{{ old('email') }}" required onkeyup="messageCheck()" class="inputEmail bg-black-follow w-full h-[45px] mt-3 rounded-[20px] px-5 focus:outline-none focus:bg-black-nav">
                @enderror
            </div>

            {{-- message --}}
            <div class="mb-5">
                <div class="flex items-center">
                    <p class="mr-1 font-bold">Message</p>
                    <span class="bg-white-primary w-[50px] h-[1px]"></span>
                </div>

                {{-- keterangan message --}}
                <p class="keteranganMessage text-[#686868] text-sm hidden">Masukan minimal 5 karakter</p>
                
                {{-- error --}}
                @error('message')
                    <p class="mt-2 text-red-700 text-sm">{{ $message }}</p>
                @enderror

                @error('message')
                    <textarea name="message" maxlength="1000" required onkeyup="messageCheck()" class="inputMessage message bg-black-follow w-full h-[200px] mt-3 rounded-[20px] p-5 resize-none focus:outline-none focus:bg-black-nav border border-red-700 focus:border-transparent">{{ old('message') }}</textarea>
                @else
                    <textarea name="message" maxlength="1000" required onkeyup="messageCheck()" class="inputMessage message bg-black-follow w-full h-[200px] mt-3 rounded-[20px] p-5 resize-none focus:outline-none focus:bg-black-nav">{{ old('message') }}</textarea>
                @enderror
            </div>

            <button type="submit" disabled class="buttonSend bg-[#f1f1f1] w-[150px] h-[45px] flex justify-center items-center rounded-[20px]">
                <p class="send text-[14px] text-[#696969] font-bold mr-1">Send</p>
                <span class="line bg-[#696969] w-[35px] h-[1px] mr-1"></span>
                <span class="bullet bg-[#696969] w-2 h-2 rounded-full"></span>
            </button>
        </form>
    </div>

    {{-- contact message berhasil --}}
    @if(session()->has('berhasil'))
        <div class="contact-message fixed z-50 top-0 right-0 bottom-0 left-0 flex justify-center items-end cursor-default md-768:justify-start">
            <p class="the-message bg-white-primary text-black-about font-bold mb-12 ml-3 py-3 px-4 rounded-[20px] shadow-lg shadow-black md-768:mb-4">{{ session('berhasil') }}</p>
        </div>
    @endif
        
    {{-- contact message gagal --}}
    @if($errors->all())
        <div class="contact-message fixed z-50 top-0 right-0 bottom-0 left-0 flex justify-center items-end cursor-default md-768:justify-start">
            <p class="the-message bg-red-700 font-bold mb-12 ml-3 py-3 px-4 rounded-[20px] md-768:mb-4">Gagal terkirim, cek form!</p>
        </div>
    @endif

    <!-- contact and footer -->
    <div class="bg-black-about w-full mt-20 pb-[49px] px-3 flex justify-center md-768:pb-0 md-768:mt-32">
        <div class="flex flex-col">
            <ul class="w-full flex justify-center mt-6 mb-3">
                <li class="mx-2 text-black-list font-bold hover:text-white-primary"><a href="{{ $medsos->instagram }}" class="cursor-default md-768:cursor-pointer">Instagram</a></li>
                <li class="mx-2 text-black-list font-bold hover:text-white-primary"><a href="{{ $medsos->linkedin }}" class="cursor-default md-768:cursor-pointer">LinkedIn</a></li>
                <li class="mx-2 text-black-list font-bold hover:text-white-primary"><a href="{{ $medsos->github }}" class="cursor-default md-768:cursor-pointer">Github</a></li>
                <li class="mx-2 text-black-list font-bold hover:text-white-primary"><a href="{{ $medsos->email }}" class="cursor-default md-768:cursor-pointer">E-Mail</a></li>
            </ul>

            <p class="w-full flex justify-center items-center mb-6 text-[12px] text-[#47474B] font-bold text-center">© {{ now()->year }} Muhammad Rizki. All rights reserved</p>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>