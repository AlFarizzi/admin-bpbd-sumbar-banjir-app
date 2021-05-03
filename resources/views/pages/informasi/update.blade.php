@extends('welcome')

@section('content')
    <form action="{{route("editInformasi",$informasi->id_info)}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        @include('pages.informasi.form')
    </form>
@endsection
