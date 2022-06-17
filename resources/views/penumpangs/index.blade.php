@extends('layouts.tabel')
@section('title', 'Daftar Penumpang')
@section('judul', 'Data  Penumpang')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('penumpangs.create') }}"> Buat Data Baru</a>
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
        <th>Name</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>alamat</th>
        <th width="120px">Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($penumpangs as $penumpang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $penumpang->nama }}</td>
            <td>{{ $penumpang->jk }}</td>
            <td>{{ $penumpang->umur }}</td>
            <td>{{ $penumpang->alamat }}</td>
            <td>
                <form action="{{ route('penumpangs.destroy', $penumpang->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('penumpangs.edit',$penumpang->id) }}">Edit</a>

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
        {{ $penumpangs->links() }}
    </div>
@endsection
