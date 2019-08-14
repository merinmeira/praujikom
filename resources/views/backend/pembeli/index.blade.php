<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pegawai - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
                </div>
                <div class="card-body">
                    <a href="/pembeli/tambah" class="btn btn-primary">Input Pembeli</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No_KTP</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepone</th>
                                <th>Pembeli_HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pembeli as $data)
                            <tr>
                                <td>{{ $data->No_KTP }}</td>
                                <td>{{ $data->Nama }}</td>
                                <td>{{ $data->Alamat }}</td>
                                <td>{{ $data->Telepone }}</td>
                                <td>{{ $data->Pembeli_HP }}</td>
                                <td>
                                    <a href="/pembeli/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/pembeli/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>      
        </div>
    </body>
</html>