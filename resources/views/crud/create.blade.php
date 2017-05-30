@extends('layouts.page')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Submit a link</h2>
            <form action="/submit" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                     @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>This field is required</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="url">Link</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL">
                    @if ($errors->has('url'))
                        <span class="help-block">
                            <strong>This field is required</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>This field is required</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection