@extends('welcome')

@section('content')
    <form action="{{route("tambahAdmin")}}" method="post">
        @csrf
        @include('pages.admin.form')
    </form>
@endsection
