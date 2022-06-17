@extends('layouts.web')
@section('title', 'Tentang | Pelabuhan Mulia Raja Napitupulu')
@section('breadcrumb', 'Tentang')
@section('judul', 'Tentang Pelabuhan')
@section('content')
    <!-- Page content-->
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-5">
            <!-- Side widget-->
            <div class="card mb-4">
              <div class="card-body">
                <img class="card-img-top" width="400" height="350" src="{{ Storage::url($tentang1->image) }}" alt="..." />
              </div>
            </div>
          </div>
          <!-- Blog entries-->
          <div class="col-lg-7">
            <!-- Featured blog post-->
            <div class="mb-4 text-end">
              <div class="card-body">
                <h2 class="card-title">{{ $tentang1->title }}</h2>
                <hr />
                <p class="card-text">
                  {{ $tentang1->content }}                
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container" data-aos="fade-up">
        <div class="row">
          <!-- Blog entries-->
          <div class="col-lg-7">
            <!-- Featured blog post-->
            <div class="mb-4 text-start">
              <div class="card-body">
                <h2 class="card-title">{{ $tentang2->title }}</h2>
                <hr />
                <p class="card-text">
                  {{ $tentang2->content }} 
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <!-- Side widget-->
            <div class="card mb-4">
              <div class="card-body">
                <br />
                <img class="card-img-top" width="400" height="350" src="{{ Storage::url($tentang2->image) }}" alt="..." />
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection