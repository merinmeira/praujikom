@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
        <form action="{{ route('motor.update', $motor->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">

            @csrf
            <div class="form-group">
              <label for="">motor kode</label>
              <input type="text" name="motor_kode" id="" class="form-control" aria-describedby="helpId" value="{{$motor->motor_kode}}">
            </div>
            <div class="form-group">
              <label for="">motor merk</label>
              <textarea name="motor_merk" id="texteditor" cols="30" rows="5" class="form-control">{{$motor->motor_merk}}</textarea>
            </div>
            <div class="form-group">
              <label for="">motor type</label>
              <textarea name="motor_type" id="texteditor" cols="30" rows="5" class="form-control">{{$motor->motor_type}}</textarea>
            </div>
            <div class="form-group">
              <label for="">motor warna</label>
              <textarea name="warna_pilihan" id="texteditor" cols="30" rows="5" class="form-control">{{$motor->warna_pilihan}}</textarea>
            </div>
            <div class="form-group">
              <label for="">motor harga</label>
              <textarea name="harga_motor" id="texteditor" cols="30" rows="5" class="form-control">{{$motor->harga_motor}}</textarea>
            </div>
            <div class="form-group">
              <label for="">motor gambar</label>
              <input type="file" name="gambar_motor" id="gambar_motor" class="form-control">
            </div>
            <div class="form-group">

            <button type="submit" class="btn btn-md btn-info">Simpan</button>
            <a name="" id="" class="btn btn-md btn-warning" href="{{route('motor.index')}}" role="button">Kembali</a>
        </form>
            </div>
          </div>
        </div>
      </div><!--/.col-->
      @endsection
