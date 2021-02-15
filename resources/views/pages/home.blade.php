@extends('app')


@section('content')   
<img src="{{asset('/images/rennes.png')}}" style="height: 300px; width:300px" alt="Rennes Flag">

<h1>Hello from Rennes</h1>

<p>It's currently {{date('h:i A')}}</p>
@endsection