@extends('layouts.web')
@section('title', 'Pengumuman | Pelabuhan Mulia Raja Napitupulu')
@section('breadcrumb', 'Pengumuman')
@section('judul', 'Pengumuman Pelabuhan')
@section('content')
    <!-- Page content-->
    <div class="container">
      <div class="row justify-content-md-center">
        <!-- Blog entries-->
        <div class="container ">
          <!-- Nested row for non-featured blog posts-->
          <div class="row mb-5">
            @foreach ($informasis as $informasi)
              <div class="col-lg-4 mb-5">
                <div class="card" style="width: 20rem;" >
                  <a class="" data-bs-toggle="modal" data-bs-target="#abc<?= $informasi->id ?>">
                    <img src="{{ Storage::url($informasi->image) }}" class="card-img-top"  width="300" height="250" alt="...">
                    <div class="card-body">
                      <h5 class="card-title h4 text-center">{{ $informasi->title }}</h5>
                    </div>
                  </a>
                </div>
              </div>
              <div class="modal fade" id="abc<?= $informasi->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $informasi->title}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="{{ Storage::url($informasi->image) }}" class="img-fluid rounded-start" alt="..." />
                    </div>
                  </div>
                </div>
              </div>
            {{-- @include('content.modal') --}}
            @endforeach
             <div class="d-flex justify-content-end mt-3">
                {{ $informasis->links() }}
            </div>
            </div>
          </div>
        </div>
      </div>


@endsection