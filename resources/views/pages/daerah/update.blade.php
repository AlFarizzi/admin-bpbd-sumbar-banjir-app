@extends('welcome')

@section('content')
    <form action="{{route("updateDaerah",$data->id_daerah)}}" method="post" enctype="multipart/form-data">
        @method("put")
        @csrf
        @include('pages.daerah.form')
    </form>
@endsection
