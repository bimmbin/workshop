@extends('layout.layout')
@section('docTitle')
    Landing Page
@endsection
@section('content')
    {{-- Inputs --}}

    <div class="">
        <p class="text-2xl font-medium">Update</p>
        <form action="/update/{{ $contact->id }}" method="post">
            @csrf
            <input class="w-full my-1 h-10 px-3" type="text" name="name" placeholder="Name" value="{{ $contact->name }}">
            <input class="w-full my-1 h-10 px-3" type="text" name="number" placeholder="Number" value="{{ $contact->number }}">
            <button type="submit" class="bg-indigo-400 px-5 py-2 rounded-md">Update</button>
        </form>
    </div>

    
@endsection

@section('script')
@endsection
