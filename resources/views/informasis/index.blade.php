@extends('layouts.tabel')
@section('title', 'Daftar Pengumuman')
@section('judul', 'Data  Pengumuman')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('informasis.create') }}"> Buat Pengumuman Terbaru Baru</a>
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
            <th>Gambar</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($informasis as $informasi)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/foto/product/{{$informasi->image}}" height="75" width="75" alt="" /></td>
                <td>{{ $informasi->title }}</td>
                <td>{{ $informasi->description }}</td>
                <td>
                    <form action="{{ route('informasis.destroy',$informasi->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('informasis.edit',$informasi->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#keluar"> Hapus </a>
                        <!-- Logout Modal-->
                        <div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ingin menghapus data ini?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Pilih "Hapus" jika anda ingin menghapus data anda saat ini</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
@endsection
@section('links')
    <div class="d-flex justify-content-end mt-3">
        {{ $informasis->links() }}
    </div>
@endsection
