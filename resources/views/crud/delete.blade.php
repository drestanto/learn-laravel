@extends('layouts.page')
@section('content')
    <form action="/deletesubmit" method="post">
        {!! csrf_field() !!}
        ID
        <input type="text" class="form-control" id="key" name="key" placeholder="ID to be deleted">
        <button type="submit" class="btn btn-default">Retrieve</button>
    </form>
@endsection
