@extends('admin.layout.layout')

@section('main')
    {{-- section name --}}
    <h1 class="bg-black-follow w-[160px] h-[50px] font-bold flex justify-center items-center rounded-[20px]">Contact</h1>
    
    <div class="bg-black-follow w-full mt-5 p-3 rounded-[20px] lg-1000:mt-5 lg-1000:p-5">        
        {{-- loop --}}
        {{-- Contact --}}
        @foreach ($contacts as $contact)
            <div class="bg-black-list-admin mt-3 p-3 flex flex-col rounded-[20px] lg-1000:mt-5 lg-1000:p-5 lg-1000:flex-row">
                <div class="lg-1000:max-w-[800px]">
                    {{-- name --}}
                    <h1 class="text-black-list font-bold">{{ ucwords($contact->name) }}</h1>
                    {{-- email --}}
                    <p class="contact-admin-overflow text-black-list text-sm pb-3 pt-1 overflow-auto">{{ $contact->email }}</p>
                    {{-- message --}}
                    <p class="contact-admin-overflow mt-2 overflow-auto">{{ $contact->message }}</p>
                    {{-- date --}}
                    <p class="mt-7 text-[#595c67] text-sm">{{ $contact->created_at }} / {{ $contact->created_at->diffForHumans() }}</p>
                    {{-- delete --}}
                    <div class="btn-delete bg-red-delete w-[100px] h-[35px] mt-5 flex justify-center items-center rounded-[20px] text-sm font-bold cursor-pointer">Delete</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- {{ $contact->created_at->diffForHumans() }} --}}

{{-- pop up delete --}}
@section('delete-contact')
    @foreach ($contacts as $contact)
        <div class="pup-up-delete bg-[#00000067] fixed top-0 right-0 bottom-0 left-0 hidden justify-center items-center">
            <div class="bg-black-follow w-[90%] px-5 py-10 rounded-[20px] sm-370:w-[300px]">
                <p class="text-center font-bold">Pesan akan dihapus!</p>
                <p class="text-center font-bold text-black-list text-sm my-7">Yakin ingin menghapus pesan?</p>
                <div class="w-full flex justify-end items-center">
                    <p class="no-delete w-max mr-5 cursor-pointer">Tidak</p>
                    <form action="/admin/contact/{{ $contact->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="text-red-700 w-max font-bold">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection