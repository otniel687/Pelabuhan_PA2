@extends('layouts.web')
@section('breadcrumb', 'Berita')
@section('content')

{{-- <form action="{{ route('beritas.update',$berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $berita->title }}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{ $berita->tgl_berita }}</div>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="{{ Storage::url($berita->image) }}" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{ $berita->description }}</p>
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </form> --}}
    <!-- Page content-->
        <div class="container mt-5">
            
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Pelabuhan Balige resmi berganti nama menjadi Pelabuhan Raja Mulia Napitupulu</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Minggu, 21 November 2021</div>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="img/home2.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Pelabuhan Balige resmi berganti nama menjadi Pelabuhan Raja Mulia NapitupuluPemerintah Kabupaten Toba bersama Balai Pengelolaan Transportasi Darat Wilayah II Sumatera resmi menabalkan Pelabuhan Kapal Motor Penyeberangan Balige di tepian Danau Toba Kota Balige, Kecamatan Balige, Kabupaten Toba, menjadi Pelabuhan Mulia Raja Napitupulu Balige, Sabtu (20/11/2021). </p>
                            <p class="fs-5 mb-4">Penabalan nama pelabuhan tersebut dihadiri langsung Bupati Toba Poltak Sitorus didampingi Wakil Bupati Tonny Simanjuntak, Kepala BPTD Wilayah II Sumatera Batara Pardede, Ketua DPRD Toba Effendi Napitupulu, Dandim 0210/TU Mayor Inf.Kaminton Napitupulu, Kabag Ops Polres Toba Kompol Jhony Andries Siregar dan perwakilan Kejaksaan Negeri Toba Samosir serta PN Balige, para tokoh masyarakat, adat, agama, dan pemuda marga Napitupulu.</p>
                            <p class="fs-5 mb-4">Bupati Toba Poltak Sitorus dalam sambutannya menyampaikan, nama Mulia Raja Napitupulu adalah salah satu nama besar dari 4 marga keturunan Raja Sonak Malela (Simangunsong, Marpaung, Napitupulu dan Pardede).</p>
                            <p class="fs-5 mb-4">“Hari ini Pelabuhan Kapal Motor Balige secara resmi berganti nama menjadi Pelabuhan Mulia Raja Napitupulu. Nama Mulia Raja dalam tatanan adat suku Batak mengandung arti dan makna besar. Lewat nama Mulia Raja Napitupulu yang mengandung arti dan makna yang besar ini diharapkan pelabuhan ini kedepan akan membawa dampak positif dan besar serta mendorong aspek pembangunan kepariwisataan di Kawasan Danau Toba Khususnya di Kabupaten Toba,” ungkap Bupati Toba Poltak.</p>
                            <p class="fs-5 mb-4">Dia juga mengucapkan terimakasih dan apresiasi yang tinggi Kepada Kementerian Perhubungan dan DRPD Kabupaten Toba dan juga kepada para pemrakarsa atas tercapai dan terlaksananya nama Mulia Raja Napitupulu resmi menjadi nama Pelabuhan Kapal Motor di Balige.</p>
                        </section>
                    </article>
                </div>
            </div>
        </div>
@endsection