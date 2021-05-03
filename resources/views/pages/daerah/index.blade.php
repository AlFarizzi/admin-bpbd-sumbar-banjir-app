@extends('welcome')

@section('content')

<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Daerah</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Daerah</th>
                                        <th>Kecamatan</th>
                                        <th>Desa</th>
                                        <th>Luas Bahaya(ha)</th>
                                        <th>Kelas</th>
                                        <th>Latitude</th>
                                        <th>Longtitude</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daerah as $d)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$d->kode_daerah}}</td>
                                            <td>{{$d->nama_kecamatan}}</td>
                                            <td>{{$d->nama_kelurahan}}</td>
                                            <td>{{$d->luas_bahaya}}</td>
                                            <td>{{$d->nama_kelas}}</td>
                                            <td>{{$d->lat}}</td>
                                            <td>{{$d->lng}}</td>
                                            <td style=" display:flex;">
                                                <a href="{{route("updateDaerah",$d->id_daerah)}}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                ||
                                                <a
                                                onclick="return confirm('Apakah Yakin Anda Akan Menghapus Data Ini ?')"
                                                href="{{route("deleteDaerah",$d->id_daerah)}}" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Daerah</th>
                                        <th>Kecamatan</th>
                                        <th>Desa</th>
                                        <th>Luas Bahaya(ha)</th>
                                        <th>Kelas</th>
                                        <th>Latitude</th>
                                        <th>Longtitude</th>
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
