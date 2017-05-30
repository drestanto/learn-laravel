@extends('layouts.page')
@section('content')
    <form action="/editsubmit" method="post">
        {!! csrf_field() !!}
        ID
        <input type="text" class="form-control" id="key" name="key" placeholder="ID to be edited">
        <button type="submit" class="btn btn-default">Retrieve</button>
    </form>
@endsection
