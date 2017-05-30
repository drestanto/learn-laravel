@extends('layouts.page')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Delete a link</h2>
            <form action="/delete/{{$link->id}}" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$link->title}}" disabled>
                </div>
                <div class="form-group">
                    <label for="url">Link</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{$link->url}}" disabled>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description" disabled>{{$link->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Delete</button>
            </form>
        </div>
    </div>
@endsection