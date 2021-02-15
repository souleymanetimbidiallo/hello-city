@extends('app')


@section('title', 'About Us | '.config('app.name'))

@section('content')   
    <img src="{{asset('/images/avatar.png')}}" 
    class="my-12 rounded shadow-md h-40" alt="Avatar">

    <h2 class="mb-5 text-gray-700">Built by <span class="text-pink-500">&hearts;</span> Soulman Dev</h2>
        
    <p><a href="{{route('app_home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revernir à la page d'accueil</a></p>
@endsection
