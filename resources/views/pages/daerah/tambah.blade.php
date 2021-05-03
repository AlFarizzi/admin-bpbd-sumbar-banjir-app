@extends('welcome')

@section('content')
    <form action="{{route("tambahDaerah")}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('pages.daerah.form')
    </form>
@endsection
