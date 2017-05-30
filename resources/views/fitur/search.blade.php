@extends('layouts.page')
@section('content')
    <form action="/searchsubmit" method="post">
        {!! csrf_field() !!}
        Search
        <input type="text" class="form-control" id="key" name="key" placeholder="Keywords">
        <button type="submit" class="btn btn-default">Search</button>
    </form>
    Related to the Search
    <br><br>
    <table style="width:100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Link</th>
            <th>Deskripsi</th>
        </tr>
        @if (!empty($links))
            @foreach ($links as $link)
            <tr>
                <th>{{ $link->id }}</th>
                <th>{{ $link->title }}</th>
                <th>{{ $link->url }}</th>
                <th>{{ $link->description }}</th>
            </tr>
            @endforeach
        @endif
    </table>
@endsection
