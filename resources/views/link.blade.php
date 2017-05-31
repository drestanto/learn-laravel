@extends('layouts.page')
@section('content')
    @if(Auth::check())
        This is the list of all the links
        <br><br>

        <table style="width:100%">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Link</th>
            </tr>
            @foreach ($links as $link)
            <tr>
                <th>{{ $link->id }}</th>
                <th>{{ $link->title }}</th>
                <th>{{ $link->url }}</th>
            </tr>
            @endforeach
        </table>
    @else
        You need to login to see this
    @endif

@endsection
