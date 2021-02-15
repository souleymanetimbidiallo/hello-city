@extends('app')


@section('title', 'About Us | '.config('app.name'))

@section('content')   
    <p>Built by &hearts; Soulman Dev</p>
        
    <p><a href="{{route('app_home')}}">Revernir à la page d'accueil</a></p>
@endsection
