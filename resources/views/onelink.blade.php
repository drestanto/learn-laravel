@extends('layouts.page')
@section('content')
    This is the list of all the links
    <br><br>
    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Link</th>
        </tr>
        <tr>
            <th>{{ $link->id }}</th>
            <th>{{ $link->title }}</th>
            <th>{{ $link->url }}</th>
        </tr>
    </table>
@endsection
