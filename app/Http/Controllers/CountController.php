<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Informasi;
use App\Models\Kendaraan;
use App\Models\Penumpang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountController extends Controller
{
    public function index(){
        $penumpang = Penumpang::count();
        $kendaraan = Kendaraan::count();
        $berita = Berita::count();
        $informasi = Informasi::count();
        // $penumpang = Penumpang::where('id',$id)->count();
        // $penumpang = DB:table('penumpangs')->count();
        return view('admin', compact('penumpang', 'kendaraan', 'berita', 'informasi'));
    }

    public function petugas(){
        $penumpang = Penumpang::count();
        $kendaraan = Kendaraan::count();
        $berita = Berita::count();
        $informasi = Informasi::count();
        // $penumpang = Penumpang::where('id',$id)->count();
        // $penumpang = DB:table('penumpangs')->count();
        return view('petugass', compact('penumpang', 'kendaraan', 'berita', 'informasi'));
    }
}
