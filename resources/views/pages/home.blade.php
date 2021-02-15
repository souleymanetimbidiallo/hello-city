@extends('app')


@section('content')   
<img src="{{asset('/images/rennes.png')}}" class="mt-12 rounded shadow-md h-32" alt="Rennes Flag">

<h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Rennes</h1>

<p class="text-lg text-gray-800">It's currently {{date('h:i A')}}</p>
@endsection