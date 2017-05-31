@extends('layouts.page')
@section('content')
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
    <!-- The Pagination -->
    {{ $links->links() }} <br> 
    <!-- ///////////////// -->

    Element in current page : {{ $links->count() }} <br>
    This is Page : {{ $links->currentPage() }} <br>
    First Item is element number : {{ $links->firstItem() }} <br>
    Last Item is element number : {{ $links->lastItem() }} <br>
    (First Item and Last Item number from all amount, not ID) <br>
    HasMorePage (boolean) : {{ $links->hasMorePages() }} <br>
    LastPage : {{ $links->lastPage() }} <br>
    NextPageURL : {{ $links->nextPageUrl() }} <br>
    PreviousPageURL : {{ $links->previousPageUrl() }} <br>
    How many element perpage (constant) : {{ $links->perPage() }} <br>
    Total data retrieved (onstant) : {{ $links->total() }} <br>
@endsection
