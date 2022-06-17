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
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($informasis as $informasi)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="{{ Storage::url($informasi->image) }}" height="75" width="75" alt="" /></td>
                <td>{{ $informasi->title }}</td>
                <td>{{ $informasi->description }}</td>
                <td>
                    <form action="{{ route('informasis.destroy',$informasi->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('informasis.edit',$informasi->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
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
