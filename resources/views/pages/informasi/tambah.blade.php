@extends('welcome')

@section('content')
    <form action="{{route("tambahInformasi")}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('pages.informasi.form')
    </form>
@endsection
