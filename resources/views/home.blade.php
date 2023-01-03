@extends('layout.layout')
@section('docTitle')
    Landing Page
@endsection
@section('content')



            <div class="hero section py-5">
                <img src="{{ asset('img/hero.png') }}" class="h-60 w-full object-cover">
            </div>
            <div class="flex flex-wrap justify-between">
                <div class="bg-indigo-400 w-52 h-32 mb-5 text-center">
                    CARD 1
                </div>
                <div class="bg-indigo-400 w-52 h-32 mb-5 text-center">
                    CARD 2
                </div>
                <div class="bg-indigo-400 w-52 h-32 mb-5 text-center">
                    CARD 3
                </div>
                <div class="bg-indigo-400 w-52 h-32 mb-5 text-center">
                    CARD 4
                </div>
                <div class="bg-indigo-400 w-52 h-32 mb-5 text-center">
                    CARD 5
                </div>
                <div class="bg-indigo-400 w-52 h-32 mb-5 text-center">
                    CARD 6
                </div>
            </div>
      

            
@endsection
