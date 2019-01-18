@extends('layouts.app')

@section('content')

{{-- Ktu do jete nje kusht if qe nqs je loguar te zhduket ky divi --}}
@if(Auth::guest())
<div class="jumbotron text-center">
        <h1>Bar Managment System</h1>
        <p>This is the web for managing your Lounge Bar</p>
        <p> 
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>  
@endif
{{--mbaron if-i --}}
@if(!Auth::guest())
    <div class="jumbotron text-center">
        <h1>Kamareri ?filan? {{-- $kamarier->auth()->emer --}} logged in</h1>
    </div>
@endif  

    <div class="jumbotron text-center">
            <h1>?Orari Kamarier-ve?</h1>
            <p>......</p>
        </div> 
        
@endsection