@extends('layout.layout')
@section('docTitle')
    Landing Page
@endsection
@section('content')
    {{-- Inputs --}}

    <div class="">
        <p class="text-2xl font-medium">Create</p>
        <form action="/home/save" method="post">
            @csrf
            <input class="w-full my-1 h-10 px-3" type="text" name="name" placeholder="Name">
            <input class="w-full my-1 h-10 px-3" type="text" name="number" placeholder="Number">
            <button type="submit" class="bg-indigo-400 px-5 py-2 rounded-md">Submit</button>
        </form>
    </div>

    {{-- Table --}}
    <div class="flex flex-col ">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 ">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden ">
                    <table class="min-w-full bg-black">
                        <thead class="bg-white border-b ">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Name
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Number
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Options
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr class="bg-white border-b hover:bg-[#C5C9F4]">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->name }} </td>
                                    <td class="text-sm text-gray-90 px-6 py-4 whitespace-nowrap">
                                        {{ $contact->number }}
                                    </td>
                                    <td class="text-sm text-gray-90 px-6 py-4 whitespace-nowrap">
                                        <a href="edit/{{ $contact->id }}">update</a>
                                    </td>
                                    <td class="text-sm text-gray-90 px-6 py-4 whitespace-nowrap">
                                        <a href="update">delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
