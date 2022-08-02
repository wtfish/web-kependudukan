{{-- @dd($penduduks) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <table class="table table-striped">
        <thead>
            <th>NIK</th>
            <th>NAMA</th>
            <th>HUBUNGAN KELUARGA</th>
            <th>AGAMA</th>
            <th>PENDIDIKAN</th>
            <th>STATUS</th>
            <th>PEKERJAAN</th>
        </thead>
    
    <tbody>
        <?php foreach ($penduduks as $penduduk) {?>
            <tr>
                <td>{{$penduduk->nik}}</td>
                <td>{{$penduduk->nama}}</td>
                <td>{{$penduduk->hubungan_keluarga->deskripsi}}</td>
                <td>{{$penduduk->agama->deskripsi}}</td>
                <td>{{$penduduk->pendidikan->deskripsi}}</td>
                <td>{{$penduduk->status->deskripsi}}</td>
                <td>{{$penduduk->pekerjaan->deskripsi}}</td>
             </tr>
        <?php }?>
    </tbody>
    </table>
         
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>