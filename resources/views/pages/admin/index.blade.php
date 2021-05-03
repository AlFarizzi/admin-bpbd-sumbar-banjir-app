@extends('welcome') @section('content')

<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Admin</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Nama Admin</th>
                                            <th>Alamat Admin</th>
                                            <th>No.Telpon</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admin as $a)
                                            <tr>
                                                <td>{{$a->nama_admin}}</td>
                                                <td>{{$a->alamat}}</td>
                                                <td>{{$a->telepon}}</td>
                                                <td>{{$a->email}}</td>
                                                <td>{{$a->username}}</td>
                                                <td>
                                                    <a href="{{route("updateAdmin",$a->id_admin)}}" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a
                                                    onclick="return confirm('Yakin Akan Menghapus Data Ini ?')"
                                                    href="{{route("deleteAdmin",$a->id_admin)}}" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Admin</th>
                                            <th>Alamat Admin</th>
                                            <th>No.Telpon</th>
                                            <th>Email</th>
                                            <th>Username</th>
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
    <link
        rel="stylesheet"
        type="text/css"
        href="/assets/vendors/css/tables/datatable/datatables.min.css">
    @endpush @push('table-vendor')
    <script src="/assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="/assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="/assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    @endpush @push('table-init-js')
    <script src="/assets/js/scripts/datatables/datatable.js"></script>
    @endpush

@endsection
