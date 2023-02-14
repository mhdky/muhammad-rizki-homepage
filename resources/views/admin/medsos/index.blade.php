@extends('admin.layout.layout')

@section('main')
    {{-- section name --}}
    <h1 class="bg-black-follow w-[160px] h-[50px] font-bold flex justify-center items-center rounded-[20px]">Media Sosial</h1>
    
    <div class="bg-black-follow w-full mt-5 p-3 rounded-[20px] lg-1000:mt-5 lg-1000:p-5">       
        {{-- edit --}}
        <a href="/admin/social/{{ $medsos->id }}/edit" class="bg-black-list-admin w-[100px] h-[35px] flex justify-center items-center rounded-[20px] font-bold">Edit</a> 

        {{-- INSTARAM --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5 lg-1000:flex-row">
            <div class="lg-1000:w-[800px]">
                {{-- name --}}
                <h1 class="text-black-list font-bold">INSTAGRAM</h1>
                {{-- email --}}
                <a href="{{ $medsos->instagram }}" class="text-sm py-3">{{ Str::limit($medsos->instagram, 30) }}</a>
            </div>
        </div>

        {{-- LINKEDIN --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5 lg-1000:flex-row">
            <div class="lg-1000:w-[800px]">
                {{-- name --}}
                <h1 class="text-black-list font-bold">LINKED</h1>
                {{-- email --}}
                <a href="{{ $medsos->linkedin }}" class="text-sm py-3">{{ Str::limit($medsos->linkedin, 30) }}</a>
            </div>
        </div>

        {{-- GITHUB --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5 lg-1000:flex-row">
            <div class="lg-1000:w-[800px]">
                {{-- name --}}
                <h1 class="text-black-list font-bold">GITHUB</h1>
                {{-- github --}}
                <a href="{{ $medsos->github }}" class="text-sm py-3">{{ Str::limit($medsos->github, 30) }}</a>
            </div>
        </div>

        {{-- EMAIL --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5 lg-1000:flex-row">
            <div class="lg-1000:w-[800px]">
                {{-- name --}}
                <h1 class="text-black-list font-bold">EMAIL</h1>
                {{-- email --}}
                <a href="{{ $medsos->email }}" class="text-sm py-3">{{ Str::limit($medsos->email, 30) }}</a>
            </div>
        </div>

        {{-- CV --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5 lg-1000:flex-row">
            <div class="lg-1000:w-[800px]">
                {{-- name --}}
                <h1 class="text-black-list font-bold">CV</h1>
                {{-- email --}}
                <a href="{{ $medsos->cv }}" class="text-sm py-3">{{ Str::limit($medsos->cv, 30) }}</a>
            </div>
        </div>
    </div>
@endsection