@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
        <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">

            @csrf
            <div class="form-group">
              <label for="">No KTP</label>
              <input type="text" name="No_KTP" id="" class="form-control" aria-describedby="helpId" value="{{$pembeli->No_KTP}}">
            </div>
            <div class="form-group">
              <label for="">Nama Pembeli</label>
              <textarea name="Nama_pembeli" id="texteditor" cols="30" rows="5" class="form-control">{{$pembeli->Nama_pembeli}}</textarea>
            </div>
            <div class="form-group">
              <label for="">Alamat Pembeli</label>
              <textarea name="Alamat_pembeli" id="texteditor" cols="30" rows="5" class="form-control">{{$pembeli->Alamat_pembeli}}</textarea>
            </div>
            <div class="form-group">
              <label for="">Telepone</label>
              <textarea name="Telepone" id="texteditor" cols="30" rows="5" class="form-control">{{$pembeli->Telepone}}</textarea>
            </div>
            <div class="form-group">
              <label for="">Pembeli HP</label>
              <textarea name="Pembeli_HP" id="texteditor" cols="30" rows="5" class="form-control">{{$pembeli->Pembeli_HP}}</textarea>
            </div>
            <div class="form-group">

            <button type="submit" class="btn btn-md btn-info">Simpan</button>
            <a name="" id="" class="btn btn-md btn-warning" href="{{route('pembeli.index')}}" role="button">Kembali</a>
        </form>
            </div>
          </div>
        </div>
      </div><!--/.col-->
      @endsection
