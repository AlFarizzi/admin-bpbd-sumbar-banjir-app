<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 <h1 class="text-center mt-2">BADANG PENANGGULANG BENCANA DAERAH KOTA PADANG</h1>
 <div class="container">

     <table class="table table-bordered">
         <tr>
             <th>No</th>
             <th>Kode Daerah</th>
             <th>Kecamatan</th>
             <th>Desa</th>
             <th>Luas Bahaya</th>
             <th>Kelas</th>
         </tr>
         @foreach ($daerah as $d)
             <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$d->kode_daerah}}</td>
                    <td>{{$d->nama_kecamatan}}</td>
                    <td>{{$d->nama_kelurahan}}</td>
                    <td>{{$d->luas_bahaya}}</td>
                    <td>{{$d->nama_kelas}}</td>
                </tr>
             @endforeach
     </table>
 </div>
 <script>
     window.print();
 </script>
</body>
</html>
