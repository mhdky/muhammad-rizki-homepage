@extends('admin.layout.layout')

@section('main')
    {{-- section name --}}
    <h1 class="bg-black-follow w-[160px] h-[50px] font-bold flex justify-center items-center rounded-[20px]">Edit Skills</h1>
    
    <div class="bg-black-follow w-full mt-5 p-3 rounded-[20px] lg-1000:mt-5 lg-1000:p-5">       
        <form action="/admin/skill/{{ $skill->id }}" method="POST" autocomplete="off" class="p-3 rounded-[20px] lg-1000:p-5">
            @method('put')
            @csrf
            {{-- web programming language two --}}
            <p class="mb-1 font-bold">Programming Language Two</p>
            {{-- error --}}
            @error('programming_language_two')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="programming_language_two" value="{{ old('programming_language_two', $skill->programming_language_two) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">       

            {{-- backend two --}}
            <p class="mt-5 mb-1 font-bold">Backend Two</p>
            {{-- error --}}
            @error('backend_two')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="backend_two" value="{{ old('backend_two', $skill->backend_two) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">

            {{-- frontend two --}}
            <p class="mt-5 mb-1 font-bold">Fronend Two</p>
            {{-- error --}}
            @error('frontend_two')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="frontend_two" value="{{ old('frontend_two', $skill->frontend_two) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">

            {{-- database two --}}
            <p class="mt-5 mb-1 font-bold">Database Two</p>
            {{-- error --}}
            @error('database_two')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="database_two" value="{{ old('database_two', $skill->database_two) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">

            {{-- other two --}}
            <p class="mt-5 mb-1 font-bold">Other Two</p>
            {{-- error --}}
            @error('other_two')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="other_two" value="{{ old('other_two', $skill->other_two) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">
        
            {{-- programming language --}}
            <p class="mt-5 mb-1 font-bold">Programming Language</p>
            {{-- error --}}
            @error('programming_language')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <textarea name="programming_language" required class="portfolio-admin bg-black-list-admin w-full h-[300px] mt-1 p-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active resize-none">{{ old('programming_language', $skill->programming_language) }}</textarea>

            {{-- backend --}}
            <p class="mt-5 mb-1 font-bold">Backend</p>
            {{-- error --}}
            @error('backend')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <textarea name="backend" required class="portfolio-admin bg-black-list-admin w-full h-[300px] mt-1 p-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active resize-none">{{ old('backend', $skill->backend) }}</textarea>

            {{-- frontend --}}
            <p class="mt-5 mb-1 font-bold">Frontend</p>
            {{-- error --}}
            @error('frontend')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <textarea name="frontend" required class="portfolio-admin bg-black-list-admin w-full h-[300px] mt-1 p-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active resize-none">{{ old('frontend', $skill->frontend) }}</textarea>

            {{-- database --}}
            <p class="mt-5 mb-1 font-bold">Database</p>
            {{-- error --}}
            @error('database')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <textarea name="database" required class="portfolio-admin bg-black-list-admin w-full h-[300px] mt-1 p-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active resize-none">{{ old('database', $skill->database) }}</textarea>

            {{-- other --}}
            <p class="mt-5 mb-1 font-bold">Other</p>
            {{-- error --}}
            @error('other')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <textarea name="other" required class="portfolio-admin bg-black-list-admin w-full h-[300px] mt-1 p-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active resize-none">{{ old('other', $skill->other) }}</textarea>

            <button type="submit" class="bg-blue-primary mt-5 px-5 py-2 text-sm font-bold rounded-[20px]">Edit Skills</button>
        </form>
    </div>
@endsection