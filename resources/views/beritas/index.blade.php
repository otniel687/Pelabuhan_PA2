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
            <td><img src="/foto/product/{{$berita->image}}" height="75" width="75" alt="" /></td>
            <td>{{ $berita->tgl_berita }}</td>
            <td>{{ $berita->title }}</td>
            <td>
               <form form action="{{ route('beritas.destroy',$berita->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('beritas.edit',$berita->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    
                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#keluar"> Keluar </a>
                        <!-- Logout Modal-->
                        <div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ingin mengakhiri sesi ini?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Pilih "Keluar" jika anda ingin mengakhiri sesi anda saat ini</div>
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
        {{ $beritas->links() }}
    </div>
@endsection
