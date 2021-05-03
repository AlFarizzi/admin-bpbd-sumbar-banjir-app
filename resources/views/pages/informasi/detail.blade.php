@extends('welcome')
@section('content')
    <div class="w-75 mx-auto">
        <div class="card">
            <div class="card-content">
                <img src="/assets/images/{{$informasi->foto}}" alt="Gambar Informasi" class="img-fluid mx-aut d-block">
                <div class="card-body">
                    <p class="card-text">
                        {{$informasi->info_isi}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
