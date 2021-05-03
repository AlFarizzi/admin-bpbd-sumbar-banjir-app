@extends('welcome')

@section('content')

<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Informasi</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Judul Informasi</th>
                                        <th>Tanggal Informasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($informasi as $i)
                                        <tr>
                                            <td style="width: 25vh">
                                                <img class="w-100" src="/assets/images/{{$i->foto}}" alt="">
                                            </td>
                                            <td>{{$i->info_judul}}</td>
                                            <td>{{$i->info_tgl}}</td>
                                            <td>
                                                <a href="{{route("editInformasi",$i->id_info)}}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini ?')" href="{{route("deleteInformasi",$i->id_info)}}" class="btn btn-danger btn-sm">
                                                    <i-fa class="fa fa-trash"></i-fa>
                                                </a>
                                                <a href="{{route("detailInformasi",$i->id_info)}}" class="btn btn-success btn-sm">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Judul Informasi</th>
                                        <th>Tanggal Informasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('table-css')
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/tables/datatable/datatables.min.css">
@endpush
@push('table-vendor')
    <script src="/assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="/assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
@endpush
@push('table-init-js')
  <script src="/assets/js/scripts/datatables/datatable.js"></script>
@endpush

@endsection
