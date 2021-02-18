@extends('layouts.app', ['title'=>'Rennes Metropole'])



@section('content')   
    <h1>Rennes Metropole</h1>
    <p>{{count($towns)}}</p>

    @foreach ($towns as $town)
        <article>
            <h1>{{$town->name}}</h1>
        </article>
        
    @endforeach

@endsection
