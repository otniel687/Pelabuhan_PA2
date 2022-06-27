@extends('layouts.tabel')
@section('title', 'Daftar Akun')
@section('judul', 'Data  Akun')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Tambah Petugas Baru</a>
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
        <th>Nama</th>
        <th>Username</th>
        <th>Role</th>
        <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->level }}</td>
            <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Ubah Password</a>

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
        {{ $users->links() }}
    </div>
@endsection
