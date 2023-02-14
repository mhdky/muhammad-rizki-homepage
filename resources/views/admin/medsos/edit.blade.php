@extends('admin.layout.layout')

@section('main')
    {{-- section name --}}
    <h1 class="bg-black-follow w-[160px] h-[50px] font-bold flex justify-center items-center rounded-[20px]">Edit Media Sosial</h1>
    
    <div class="bg-black-follow w-full mt-5 p-3 rounded-[20px] lg-1000:mt-5 lg-1000:p-5">       
        <form action="/admin/social/{{ $medsos->id }}" method="POST" autocomplete="off" class="p-3 rounded-[20px] lg-1000:p-5">
            @method('put')
            @csrf
            {{-- instagram --}}
            <p class="mt-7 mb-1 font-bold">Instagram</p>
            {{-- error --}}
            @error('instagram')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="instagram" value="{{ old('instagram', $medsos->instagram) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active"> 
            
            {{-- linkedin --}}
            <p class="mt-7 mb-1 font-bold">Linkedin</p>
            {{-- error --}}
            @error('linkedin')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="linkedin" value="{{ old('linkedin', $medsos->linkedin) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active"> 

            {{-- github --}}
            <p class="mt-7 mb-1 font-bold">Github</p>
            {{-- error --}}
            @error('github')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="github" value="{{ old('github', $medsos->github) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active"> 

            {{-- email --}}
            <p class="mt-7 mb-1 font-bold">Email</p>
            {{-- error --}}
            @error('email')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="email" value="{{ old('email', $medsos->email) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active"> 

            {{-- cv --}}
            <p class="mt-7 mb-1 font-bold">CV</p>
            {{-- error --}}
            @error('cv')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="cv" value="{{ old('cv', $medsos->cv) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active"> 

            <button type="submit" class="bg-blue-primary mt-5 px-5 py-2 text-sm font-bold rounded-[20px]">Edit Media Sosial</button>
        </form>
    </div>
@endsection