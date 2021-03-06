@extends('layouts.page')
@section('content')
    <form action="/searchsubmit" method="post">
        {!! csrf_field() !!}
        Search
        @if (empty($links))
            <input type="text" class="form-control" id="key" name="key" placeholder="Keywords">
        @else
            <input type="text" class="form-control" id="key" name="key" placeholder="Keywords" value="{{$keyword}}">
        @endif
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
    <!-- Pages -->
    @if (!empty($links))
        @if (($links->hasMorePages()) OR ($links->currentPage() != 1))
            {{ $links->links() }}
        @endif
    @endif
@endsection
