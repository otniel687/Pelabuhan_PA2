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

                    <button type="submit" class="btn btn-danger">Hapus</button>
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
