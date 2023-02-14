@extends('admin.layout.layout')

@section('main')
    {{-- section name --}}
    <h1 class="bg-black-follow w-[160px] h-[50px] font-bold flex justify-center items-center rounded-[20px]">Edit About</h1>
    
    <div class="bg-black-follow w-full mt-5 p-3 rounded-[20px] lg-1000:mt-5 lg-1000:p-5">       
        <form action="/admin/about/{{ $about->id }}" method="POST" autocomplete="off" class="p-3 rounded-[20px] lg-1000:p-5">
            @method('put')
            @csrf
            {{-- paragraf one --}}
            <p class="mt-7 mb-1 font-bold">Paragraf Satu</p>
            {{-- error --}}
            @error('paragraf_one')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="paragraf_one" value="{{ old('paragraf_one', $about->paragraf_one) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">   
            
            {{-- paragraf two --}}
            <p class="mt-7 mb-1 font-bold">Paragraf Satu</p>
            {{-- error --}}
            @error('paragraf_two')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="paragraf_two" value="{{ old('paragraf_two', $about->paragraf_two) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">  

            {{-- paragraf three --}}
            <p class="mt-7 mb-1 font-bold">Paragraf Satu</p>
            {{-- error --}}
            @error('paragraf_three')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="paragraf_three" value="{{ old('paragraf_three', $about->paragraf_three) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">   

            <button type="submit" class="bg-blue-primary mt-5 px-5 py-2 text-sm font-bold rounded-[20px]">Edit About</button>
        </form>
    </div>
@endsection