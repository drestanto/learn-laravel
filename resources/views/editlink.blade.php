@extends('layouts.page')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Edit a link</h2>
            <form action="/edit/{{$link->id}}" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$link->title}}">
                     @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>This field is required</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="url">Link</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{$link->url}}">
                    @if ($errors->has('url'))
                        <span class="help-block">
                            <strong>This field is required</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description">{{$link->description}}</textarea>
                    @if ($errors->has('Description'))
                        <span class="help-block">
                            <strong>This field is required</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Edit</button>
            </form>
        </div>
    </div>
@endsection