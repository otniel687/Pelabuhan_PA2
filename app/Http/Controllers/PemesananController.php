<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Kendaraan;
use App\Models\Penumpang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    public function index() {
        $data['pemesanans'] = Pesanan::orderBy('id','desc')->simplePaginate(5);
        $data['pemesanans'] = DB::table('kendaraans')->orderBy('pesanan_id', 'desc')->join('pesanans', 'pesanans.id', '=', 'kendaraans.pesanan_id')->simplePaginate(10);
        $data['detail'] = '/pemesanan/detail/';
        $data['verifikasi'] = '/pemesanan/verifikasi-pembayaran/';
        $data['delete'] = '/pemesanan/delete/';

        return view('pemesanan.index', $data)
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    public function detail($id) {
        $pemesanan = DB::table('pesanans')
            ->where('pesanans.id', $id)
            ->first();
        $pemesanan->kendaraan = DB::table('kendaraans')->where('pesanan_id', $pemesanan->id)->first();
        $pemesanan->penumpang = DB::table('penumpangs')->where('pesanan_id', $pemesanan->id)->get();
        $pemesanan->kembali = '/pemesanan';

        return view('pemesanan.detail', ['pemesanan' => $pemesanan]);
    }

    public function indexPetugas() {
        $data['pemesanans'] = Pesanan::orderBy('id','desc')->simplePaginate(5);
        $data['pemesanans'] = DB::table('kendaraans')->orderBy('pesanan_id', 'desc')->join('pesanans', 'pesanans.id', '=', 'kendaraans.pesanan_id')->simplePaginate(10);
        $data['detail'] = '/pemesanan-petugas/detail/';
        $data['verifikasi'] = '/pemesanan-petugas/verifikasi-pembayaran/';
        $data['delete'] = '/pemesanan/delete/';

        return view('petugas.index-petugas', $data)
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    public function detailPetugas($id) {
        $pemesanan = DB::table('pesanans')
            ->where('pesanans.id', $id)
            ->first();
        $pemesanan->kendaraan = DB::table('kendaraans')->where('pesanan_id', $pemesanan->id)->first();
        $pemesanan->penumpang = DB::table('penumpangs')->where('pesanan_id', $pemesanan->id)->get();
        $pemesanan->kembali = '/pemesanan-petugas';

        return view('petugas.detail', ['pemesanan' => $pemesanan]);
    }

    public function lunasPetugas($id)
    {
        $pemesanan = Pesanan::find($id);
        $pemesanan->update(['status_pembayaran' => 1]);

        return redirect('/pemesanan-petugas')->with('success', 'Verifikasi pembayaran berhasil.');
    }

    public function lunas($id)
    {
        // DB::table('pesanans')->update(['status_pembayaran' => 1]);
        $pemesanan = Pesanan::find($id);
        $pemesanan->update(['status_pembayaran' => 1]);

        return redirect('/pemesanan')->with('success', 'Verifikasi pembayaran berhasil.');
    }

    public function destroy($id)
    {
        $data = DB::table('pesanans')
                    ->leftJoin('kendaraans', 'pesanans.id', '=', 'kendaraans.pesanan_id')
                    ->leftJoin('penumpangs', 'pesanans.id', '=', 'penumpangs.pesanan_id')
                    ->where('pesanans.id', $id); 
        DB::table('kendaraans')->where('pesanan_id', $id)->delete();                           
        DB::table('penumpangs')->where('pesanan_id', $id)->delete();                           
        $data->delete();

        return redirect('/pemesanan')->with('success', 'Verifikasi pembayaran gagal');
    }

    public function destroyPetugas($id)
    {
        $data = DB::table('pesanans')
                    ->leftJoin('kendaraans', 'pesanans.id', '=', 'kendaraans.pesanan_id')
                    ->leftJoin('penumpangs', 'pesanans.id', '=', 'penumpangs.pesanan_id')
                    ->where('pesanans.id', $id); 
        DB::table('kendaraans')->where('pesanan_id', $id)->delete();                           
        DB::table('penumpangs')->where('pesanan_id', $id)->delete();                           
        $data->delete();

        return redirect('/pemesanan-petugas')->with('success', 'Verifikasi pembayaran gagal');
    }
}
