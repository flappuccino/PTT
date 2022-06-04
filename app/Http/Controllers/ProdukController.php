<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function produk()
    {
        return view('produk');
    }
    public function tambahproduk()
    {
        return view('tambahproduk');
    }
    public function listproduk()
    {
        $data['produk']= Produk::all();
        // dd($data);
        return view('listproduk', $data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Produk $Produk)
    {
        $data = $request->all();
        $nama_produk= $data['nama_produk'];
        $harga= $data['harga'];
        $jml_unit= $data['jml_unit'];
        $tipe_kamar= $data['tipe_kamar'];
        $gambar= $data['gambar'];
        $deskripsi= $data['deskripsi'];
        
        $data=[
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'jml_unit' => $jml_unit,
            'tipe_kamar' => $tipe_kamar,
            'gambar' => $gambar,
            'deskripsi' => $deskripsi,
            'id_user' => 1          
        ];

        // dd($data);

        $produk = Produk::create($data);
        return redirect('/listproduk');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        $id = $_GET['id'];
        // dd($id);
        $dataproduk = $produk->where('id_produk', $id)->get();
        $data=[
            'produk'=> $dataproduk
        ];
        // dd($data);

        return view('editproduk',$data);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $data = $request->all();
        $id= $data['id'];
        $nama_produk= $data['nama_produk'];
        $harga= $data['harga'];
        $jml_unit= $data['jml_unit'];
        $tipe_kamar= $data['tipe_kamar'];
        $gambar= $data['gambar'];
        $deskripsi= $data['deskripsi'];
        

        $data=[
            'id_produk' => $id,
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'jml_unit' => $jml_unit,
            'tipe_kamar' => $tipe_kamar,
            'gambar' => $gambar,
            'deskripsi' => $deskripsi,
            'id_user' => 1
        ];

        // dd($data);   
        Produk::where('id_produk', $id)->update($data);
        // $produk->update($data);

        return redirect('/listproduk');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Produk $produk, $id)
    {
        
        // dd($id);
        // $dataproduk = $produk->where('id_produk', $id)->get();
        // $data=[
        //     'produk'=> $dataproduk
        // ];
        
        Produk::where('id_produk', $id)->delete();
        // Produk::where('id_produk', $id)->delete();
        // $produk->delete();
        return redirect('/listproduk');
    }
}
