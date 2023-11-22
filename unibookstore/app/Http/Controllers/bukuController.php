<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('Data_Buku',$request->Data_Buku);
        Session::flash('Kategori',$request->Kategori);
        Session::flash('Nama_Buku',$request->Nama_Buku);
        Session::flash('Harga',$request->Harga);
        Session::flash('Stok',$request->Stok);
        Session::flash('Penerbit',$request->Penerbit);
        
        $request->validate([
            'Data_Buku' => 'required',
            'Kategori' => 'required',
            'Nama_Buku' => 'required',
            'Harga' => 'required | numeric',
            'Stok' => 'required | numeric',
            'Penerbit' => 'required',

        ],[

            'Data_Buku.required'=>'ID Buku Wajib diisi',
            'Kategori.required'=>'Kategori wajib diisi', 
            'Nama_Buku.required'=>'Nama Buku Wajib diisi',
            'Harga.required'=>'Harga Wajib diisi',
            'Stok.required'=>'Stok diisi',
            'Penerbit.required'=>'Penerbit Wajib diisi',

        ]);
        $data = [

            'Data_Buku'=>$request->Data_Buku,
            'Kategori'=>$request->Kategori,
            'Nama_Buku'=>$request->Nama_Buku,
            'Harga'=>$request->Harga,
            'Stok'=>$request->Stok,
            'Penerbit'=>$request->Penerbit,
        ];
        
        Buku::create($data);
        return redirect() ->route('admin')->with ('Sukses', 'Data buku berhasil ditambah');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return 'hai' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
