@extends('admin.layout.layout')

@section('main')
    {{-- section name --}}
    <h1 class="bg-black-follow w-[160px] h-[50px] font-bold flex justify-center items-center rounded-[20px]">Portfolio</h1>
    
    <div class="bg-black-follow w-full mt-5 p-3 rounded-[20px] lg-1000:mt-5 lg-1000:p-5">
        {{-- add --}}
        <a href="/admin/portfolio/create" class="bg-black-list-admin w-[100px] h-[35px] flex justify-center items-center rounded-[20px] font-bold">Add</a>
        
        {{-- loop --}}
        {{-- portfolio --}}
        @foreach ($portfolios as $portfolio)
            <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5 lg-1000:flex-row">
                <img src="{{ asset('storage/' . $portfolio->poster) }}" alt="{{ Str::upper($portfolio->web_name) }}" class="w-[250px] h-max rounded-[10px]">
                
                {{-- detail --}}
                <div class="w-full mt-5 lg-1000:mt-0 lg-1000:ml-5">
                    {{-- web name --}}
                    <div class="bg-black-follow w-full px-4 py-2 rounded-[20px] flex justify-between">
                        <h2 class="font-bold text-black-list">Web Name</h2>
                        <i class="fas fa-sort-down text-xl -mt-1 text-black-list"></i>
                    </div>
                    <p class="font-bold mt-2 px-4">{{ Str::upper($portfolio->web_name) }}</p>

                    {{-- technology --}}
                    <div class="bg-black-follow w-full mt-5 px-4 py-2 rounded-[20px] flex justify-between">
                        <h2 class="font-bold text-black-list">Technology</h2>
                        <i class="fas fa-sort-down text-xl -mt-1 text-black-list"></i>
                    </div>
                    <p class="font-bold mt-2 px-4">{{ $portfolio->technology_two }}</p>

                    {{-- status --}}
                    <div class="bg-black-follow w-full mt-5 px-4 py-2 rounded-[20px] flex justify-between">
                        <h2 class="font-bold text-black-list">Status</h2>
                        <i class="fas fa-sort-down text-xl -mt-1 text-black-list"></i>
                    </div>
                    <p class="font-bold mt-2 px-4 {{ ($portfolio->status === 'Development' ? 'text-yellow-600' : 'text-green-600') }}">{{ $portfolio->status }}</p>

                    <div class="w-full flex justify-end items-center mt-5 mb-2">
                        <a href="/admin/portfolio/{{ $portfolio->id }}/edit" class="bg-blue-primary w-[100px] h-[33px] text-sm font-bold mr-2 flex justify-center items-center rounded-[20px]">Edit</a>
                        <button type="submit" class="btn-delete bg-red-delete w-[100px] h-[33px] text-sm font-bold flex justify-center items-center rounded-[20px]">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- pop up delete --}}
@section('delete-contact')
    @foreach ($portfolios as $portfolio)
        <div class="pup-up-delete bg-[#00000067] fixed top-0 right-0 bottom-0 left-0 hidden justify-center items-center">
            <div class="bg-black-follow w-[90%] px-5 py-10 rounded-[20px] sm-370:w-[300px]">
                <p class="text-center font-bold">Portfolio akan dihapus!</p>
                <p class="text-center font-bold text-black-list text-sm my-7">Yakin ingin menghapus portfolio?</p>
                <div class="w-full flex justify-end items-center">
                    <p class="no-delete w-max mr-5 cursor-pointer">Tidak</p>
                    <form action="/admin/portfolio/{{ $portfolio->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="text-red-700 w-max font-bold">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection