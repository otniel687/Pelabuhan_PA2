<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class TampilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tampils'] = Berita::orderBy('id','desc')->simplePaginate(5);

        // return view('beritas.index', ['data'=>$data])->with('i',(request()->input('page',1) - 1) * 5);

        return view('tampil.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tampil.create');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $tampil,$id)
    {
        $tampil = Berita::find($id);

        return view('tampil.show',compact('tampil'));
    }
}
