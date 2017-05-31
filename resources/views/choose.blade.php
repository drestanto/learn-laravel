@extends('layouts.page')
@section('content')
    <h2> Choose one </h2>
    <br><br>
    @if (Auth::check())
	    <a href="/links"> <button> Links </button></a>
	    <a href="/create"> <button> New </button></a>
	    <a href="/edit"> <button> Edit </button></a>
	    <a href="/delete"> <button> Delete </button></a>
	    <br><br> Fitur <br>
	    <a href="/search"> <button> Search </button></a>
	    <a href="/somelink"> <button> Links </button></a>
	@else
		You have not logged in <br>
		You can choose nothing before logging in ._.
	@endif
    
@endsection
