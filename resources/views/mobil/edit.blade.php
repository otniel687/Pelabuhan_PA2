@extends('layouts.adm')
@section('title', 'Daftar Kendaraan | Admin')
@section('judul', 'Data  Kendaraan')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('mobil.index') }}" enctype="multipart/form-data"> Kembali</a>
            </div>
        </div>
    </div>

  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif

    <form action="{{ route('mobil.update',$kendaraan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <input type="date" class="form-control text-start" name="tanggal" value="{{ $kendaraan->tanggal }}">
                    @error('title')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Waktu:</strong>
                   <select name="waktu" id="" class="center form-control">
                        <option value="{{ $kendaraan->waktu }}">--{{ $kendaraan->waktu }}--</option>
                        <option value="08:00">08:00</option>
                        <option value="10:00">10:00</option>
                    </select>
                    @error('description')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pemilik:</strong>
                     <input type="text" name="nama" value="{{ $kendaraan->nama }}" class="form-control" placeholder="Post Title">
                    @error('description')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kendaraan:</strong>
                    <select name="jenis" class="form-control">
                        <option value="{{ $kendaraan->jenis }}">{{ $kendaraan->jenis }}</option>
                        <option value="Tidak Berkendara">Tidak Berkendara</option>
                        <option value="Gol I (Sepeda Dayung)">Gol I (Sepeda Dayung)</option>
                        <option value="Gol II (Sepeda Motor_">Gol II (Sepeda Motor)</option>
                        <option value="Gol III (Becak, Sepeda Motor 500 CC)">Gol II (Becak, Sepeda Motor 500 CC)</option>
                        <option value="Gol IV A (Minibus/Sedan)">Gol IV A (Minibus/Sedan)</option>
                        <option value="Gol IV B (Pick Up)">Gol IV B (Pick Up)</option>
                        <option value="Gol V A (Bus Sedang)">Gol V A (Bus Sedang)</option>
                        <option value="Gol V B (Colt Diesel 5-7 meter)">Gol V B (Colt Diesel 5-7 meter)</option>
                        <option value="Gol VI A (Bus Besar)">Gol VI A (Bus Besar)</option>
                        <option value="Gol VI B (Fuso 7 - 10 meter)">Gol VI B (Fuso 7 - 10 meter)</option>
                        <option value="Gol VII (Tronton)">Gol VII (Tronton)</option>
                        <option value="Gol VIII (Trailer)">Gol VIII (Trailer)</option>
                    </select>
                    @error('description')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Polisi:</strong>
                     <input type="text" name="no_polisi" value="{{ $kendaraan->no_polisi }}" class="form-control" placeholder="Post Title">
                    @error('description')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
              <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>
@endsection
