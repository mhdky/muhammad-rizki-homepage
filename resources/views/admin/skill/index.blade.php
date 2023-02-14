@extends('admin.layout.layout')

@section('main')
    {{-- section name --}}
    <h1 class="bg-black-follow w-[160px] h-[50px] font-bold flex justify-center items-center rounded-[20px]">Skills</h1>
    
    <div class="bg-black-follow w-full mt-5 p-3 rounded-[20px] lg-1000:mt-5 lg-1000:p-5">
        {{-- edit --}}
        <a href="/admin/skill/{{ $skill->id }}/edit" class="bg-black-list-admin w-[100px] h-[35px] flex justify-center items-center rounded-[20px] font-bold">Edit</a>
        
        {{-- programming language --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5">
            {{-- name --}}
            <h1 class="text-black-list font-bold mb-3">Programming Language</h1>
            <p class="lg-1000:w-[800px]">{{ $skill->programming_language_two }}</p>
        </div>

        {{-- backend --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5">
            {{-- name --}}
            <h1 class="text-black-list font-bold mb-3">Backend</h1>
            <p class="lg-1000:w-[800px]">{{ $skill->backend_two }}</p>
        </div>

        {{-- frontend --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5">
            {{-- name --}}
            <h1 class="text-black-list font-bold mb-3">Frontend</h1>
            <p class="lg-1000:w-[800px]">{{ $skill->frontend_two }}</p>
        </div>

        {{-- database --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5">
            {{-- name --}}
            <h1 class="text-black-list font-bold mb-3">Database & ORM</h1>
            <p class="lg-1000:w-[800px]">{{ $skill->database_two }}</p>
        </div>

        {{-- other --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5">
            {{-- name --}}
            <h1 class="text-black-list font-bold mb-3">Other</h1>
            <p class="lg-1000:w-[800px]">{{ $skill->other_two }}</p>
        </div>
    </div>
@endsection