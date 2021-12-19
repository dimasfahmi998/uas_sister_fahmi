<?php

namespace App\Http\Controllers;

use App\Models\Handphone2;
use Illuminate\Http\Request;

class Handphone2Controller extends Controller
{
    /**
     * fungsi index untuk menampilkan data semua 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return handphone2::all();
    }

    /**
     * Menambahkan data handphone2 Baru
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $handphone2 = new handphone2();
        $handphone2 -> Merk = $request->Merk;
        $handphone2 -> Jenis = $request->Jenis;
        $handphone2 -> Harga = $request->Harga;
        $handphone2->save();
        return "Handphone berhasil ditambahkan";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\handphone2  $handphone2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $Merk = $request->Merk;
        $Jenis = $request->Jenis;
        $Harga = $request->Harga;
        
        $handphone2 = handphone2::find($id);
        $handphone2->Merk =$Merk;
        $handphone2->Jenis =$Jenis;
        $handphone2->Harga=$Harga;
        $handphone2->save();

        return "Handphone berhasil dimodifikasi";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\handphone2  $handphone2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $handphone2 = handphone2::find($id);
        $handphone2 ->delete();
        
        return "Handphone berhasil dihapus";
    }
}
