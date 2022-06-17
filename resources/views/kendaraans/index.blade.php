@extends('layouts.tabel')
@section('title', 'Daftar Kendaraan')
@section('judul', 'Data  Kendaraan')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('kendaraans.create') }}"> Buat Data Baru</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@endsection
@section('tabel')
<thead>
    <tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>Waktu</th>
    <th>Nama</th>
    <th>Jenis Kendaraan</th>
    <th>No Polisi</th>
    <th width="120px">Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($kendaraans as $kendaraan)
    <tr>
        <td>{{++$i }}</td>
        <td>{{ $kendaraan->tanggal }}</td>
        <td>{{ $kendaraan->waktu }}</td>
        <td>{{ $kendaraan->nama }}</td>
        <td>{{ $kendaraan->jenis }}</td>
        <td>{{ $kendaraan->no_polisi }}</td>
        <td>
            <form action="{{ route('kendaraans.destroy', $kendaraan->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('kendaraans.edit',$kendaraan->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
@endsection
@section('links')
    <div class="d-flex justify-content-end mt-3">
        {{ $kendaraans->links() }}
    </div>
@endsection
