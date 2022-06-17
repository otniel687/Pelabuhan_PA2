@extends('layouts.web')
@section('title', 'Daftar Kendaraan | Admin')
@section('breadcrumb', 'Jadwal')
@section('judul', 'Jadwal Pelabuhan')
@section('content')
    <section>
        <div class="container">
          <div class="section-body mt-5" data-aos="fade-up">
            <!-- <h5>Jadwal Kapal Ferry:</h5> -->
            <img src="{{ Storage::url($jadwal1->image) }}" alt="" />
            <!-- <h5 class="mt-5">Jadwal Kapal Rakyat:</h5> -->
            <img src="{{ Storage::url($jadwal2->image) }}" class="mt-5 mb-5" alt="" />
          </div>
        </div>
      </section>
@endsection