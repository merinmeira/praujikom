@extends('layouts.app')

@section('css')
        <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
        <script src="{{asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables motor</h5><br>
                <center>
                        <a href="{{ route('motor.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Motor Kode</th>
                                <th>Motor Merk</th>
                                <th>Motor Type</th>
                                <th>Motor Warna Pilihan</th>
                                <th>Motor Harga</th>
                                <th>Motor Gambar</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($motor as $data)
                            <tr>
                            <td>{{ $no++ }}</td>
                                <td>{{ $data->motor_kode }}</td>
                                <td>{{ $data->motor_merk }}</td>
                                <td>{{ $data->motor_type }}</td>
                                <td>{{ $data->warna_pilihan }}</td>
                                <td>{{ $data->harga_motor }}</td>
                               <td><img src="{{ asset('assets/img/motor/'.$data->gambar_motor)}}" width="100"></td>
								<td style="text-align: center;">
                                    <form action="{{route('motor.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('motor.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('motor.show', $data->id) }}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
									</form>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection