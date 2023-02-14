@extends('admin.layout.layout')

@section('main')
    {{-- section name --}}
    <h1 class="bg-black-follow w-[160px] h-[50px] font-bold flex justify-center items-center rounded-[20px]">Edit Portfolio</h1>
    
    <div class="bg-black-follow w-full mt-5 p-3 rounded-[20px] lg-1000:mt-5 lg-1000:p-5">       
        <form action="/admin/portfolio/{{ $portfolio->id }}" method="POST" enctype="multipart/form-data" autocomplete="off" class="p-3 rounded-[20px] lg-1000:p-5">
            @method('put')
            @csrf
            {{-- web name --}}
            <p class="mb-1 font-bold">Web Name</p>
            {{-- error --}}
            @error('web_name')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="web_name" maxlength="100" value="{{ old('web_name', $portfolio->web_name) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">       

            {{-- status --}}
            <p class="mt-5 mb-1 font-bold">Status</p>
            {{-- error --}}
            @error('status')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <select name="status" class="status bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">
                @if(old('status', $portfolio->status) === 'Development')
                    <option value="Development" selected>Development</option>
                    <option value="Publish">Publish</option>
                @elseif(old('status', $portfolio->status) === 'Publish')
                    <option value="Publish" selected>Publish</option>
                    <option value="Development">Development</option>
                @else
                    <option value="Development">Development</option>
                    <option value="Publish">Publish</option>
                @endif
            </select>

            {{-- web_link --}}
            <p class="web_link {{ (old('status', $portfolio->status) === 'Publish' ? 'block' : 'hidden') }} mt-5 mb-1 font-bold">Web Link</p>
            {{-- error --}}
            @error('web_link')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="url" name="web_link" value="{{ old('web_link', $portfolio->web_link) }}" class="web_link_two {{ (old('status', $portfolio->status) === 'Publish' ? 'block' : 'hidden') }} bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">

            {{-- web_repo --}}
            <p class="web_repo {{ (old('status', $portfolio->status) === 'Publish' ? 'block' : 'hidden') }} mt-5 mb-1 font-bold">Repository Link</p>
            {{-- error --}}
            @error('web_repo')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="url" name="web_repo" value="{{ old('web_repo', $portfolio->web_repo) }}" class="web_repo_two {{ (old('status', $portfolio->status) === 'Publish' ? 'block' : 'hidden') }} bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">
        
            {{-- description --}}
            <p class="mt-5 mb-1 font-bold">Description</p>
            {{-- error --}}
            @error('description')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <textarea name="description" required class="portfolio-admin bg-black-list-admin w-full h-[300px] mt-1 p-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active resize-none">{{ old('description', $portfolio->description) }}</textarea>

            {{-- technology_one --}}
            <p class="mt-5 mb-1 font-bold">Technology One</p>
            {{-- error --}}
            @error('technology_one')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <textarea name="technology_one" required class="portfolio-admin bg-black-list-admin w-full h-[300px] mt-1 p-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active resize-none">{{ old('technology_one', $portfolio->technology_one) }}</textarea>

            {{-- technology_two --}}
            <p class="mt-5 mb-1 font-bold">Technology Two</p>
            {{-- error --}}
            @error('technology_two')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="text" name="technology_two" value="{{ old('technology_two', $portfolio->technology_two) }}" required class="bg-black-list-admin w-full h-10 mt-1 px-4 rounded-[20px] focus:outline-none focus:bg-black-list-admin-active">

            {{-- poster --}}
            <div class="w-[200px] mt-10 mb-3">
                @if ($portfolio->poster)
                    <img src="{{ asset('storage/' . $portfolio->poster) }}" class="img-preview">
                @else
                    <img class="img-preview">
                @endif
            </div>
            <p class="mt-5 mb-1 font-bold">Poster</p>
            {{-- error --}}
            @error('poster')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="hidden" name="oldPoster" value="{{ $portfolio->poster }}">
            <input type="file" name="poster" onchange="priviewImg()" value="{{ old('poster', $portfolio->poster) }}" class="inputImg bg-black-list-admin w-full h-10 mt-1 py-1 px-4 rounded-[20px] cursor-pointer focus:outline-none focus:bg-black-list-admin-active">

            {{-- img_url --}}
            <div class="w-[200px] mt-10 mb-3">
                @if ($portfolio->img_url)
                    <img src="{{ asset('storage/' . $portfolio->img_url) }}" class="img-preview-detail">
                @else
                    <img class="img-preview-detail">
                @endif
            </div>
            <p class="mt-5 mb-1 font-bold">Image URL</p>
            {{-- error --}}
            @error('img_url')
                <p class="text-red-700 text-sm mb-1">{{ $message }}</p>
            @enderror
            <input type="hidden" name="oldImg_url" value="{{ $portfolio->img_url }}">
            <input type="file" name="img_url" onchange="priviewImgDetail()" value="{{ old('img_url', $portfolio->img_url) }}" class="inputImgDetail bg-black-list-admin w-full h-10 mt-1 py-1 px-4 rounded-[20px] cursor-pointer focus:outline-none focus:bg-black-list-admin-active">

            {{-- poster
            <p class="mt-5 mb-1 font-bold">Poster</p>
            error
            <p class="text-red-700 text-sm mb-1">error gobloks adf</p>
            <input type="file" name="poster" class=""> --}}

            <button type="submit" class="bg-blue-primary mt-5 px-5 py-2 text-sm font-bold rounded-[20px]">Edit Portfolio</button>
        </form>
    </div>
@endsection

@section('add-portfolio')
    <script src="{{ asset('js/script-admin-add-portfolio.js') }}"></script>
@endsection