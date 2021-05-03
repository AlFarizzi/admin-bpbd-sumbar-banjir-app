@extends('welcome')

@section('content')
    <form action="{{route("updateAdmin",$a)}}" method="post">
        @csrf
        @method('put')
        @include('pages.admin.form')
    </form>
@endsection
