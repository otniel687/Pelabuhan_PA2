@extends('layouts.tabel')
@section('title', 'Daftar Berita')
@section('judul', 'Data  Berita')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('beritas.create') }}"> Buat Postingan Baru</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

@endsection
@section('tabels')
    <thead>
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Tanggal Berita</th>
            <th>Title</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($beritas as $berita)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="{{ Storage::url($berita->image) }}" height="75" width="75" alt="" /></td>
            <td>{{ $berita->tgl_berita }}</td>
            <td>{{ $berita->title }}</td>
            <td>
               <form form action="{{ route('beritas.destroy',$berita->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('beritas.edit',$berita->id) }}">Edit</a>

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
        {{ $beritas->links() }}
    </div>
@endsection
