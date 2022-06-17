@extends('layouts.web')
@section('title', 'Berita | Pelabuhan Mulia Raja Napitupulu')
@section('breadcrumb', 'Berita')
@section('judul', 'Berita Pelabuhan')
@section('content')
    <div class="container">
      <div class="row justify-content-md-center">
        <!-- Blog entries-->
        <div class="container ">
          <!-- Nested row for non-featured blog posts-->
          <div class="row">
              @foreach ($tampils as $tampil)
                <div class="col-lg-6">
                  <div class="card" style="width: 30rem;" >
                    <img src="{{ Storage::url($tampil->image) }}" class="card-img-top"  width="400" height="250" alt="...">
                    <div class="card-body">
                      <div class="small text-muted">{{ $tampil->tgl_berita }}</div>
                      <h5 class="card-title h4">{{ $tampil->title }}</h5>
                      <p class="card-text">{{ substr($tampil->description, 0, 190) }}...</p>
                      <form form action="{{ route('tampils.show',$tampil->id) }}" method="POST">
                        @csrf
                        <a class="btn btn-primary" href="{{ route('tampils.show',$tampil->id) }}">Baca Selengkapnya →</a>
                      </form>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
@endsection
