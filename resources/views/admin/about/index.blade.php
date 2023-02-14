@extends('admin.layout.layout')

@section('main')
    {{-- section name --}}
    <h1 class="bg-black-follow w-[160px] h-[50px] font-bold flex justify-center items-center rounded-[20px]">About</h1>
    
    <div class="bg-black-follow w-full mt-5 p-3 rounded-[20px] lg-1000:mt-5 lg-1000:p-5">
        {{-- edit --}}
        <a href="/admin/about/{{ $about->id }}/edit" class="bg-black-list-admin w-[100px] h-[35px] flex justify-center items-center rounded-[20px] font-bold">Edit</a>
        
        {{-- about paragraf 1 --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5 lg-1000:flex-row">
            <p class="lg-1000:w-[800px]">{{ $about->paragraf_one }}</p>
        </div>

        {{-- about paragraf 2 --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5 lg-1000:flex-row">
            <p class="lg-1000:w-[800px]">{{ $about->paragraf_two }}</p>
        </div>

        {{-- about paragraf 3 --}}
        <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5 lg-1000:flex-row">
            <p class="lg-1000:w-[800px]">{{ $about->paragraf_three }}</p>
        </div>
    </div>
@endsection