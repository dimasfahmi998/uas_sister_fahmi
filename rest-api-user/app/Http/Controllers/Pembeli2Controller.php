<?php

namespace App\Http\Controllers;

use App\Models\pembeli2;
use Illuminate\Http\Request;

class Pembeli2Controller extends Controller
{
    /**
     * fungsi index untuk menampilkan data semua 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return pembeli2::all();
    }

    /**
     * Menambahkan data pembeli2 Baru
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pembeli2 = new pembeli2();
        $pembeli2 -> Nama = $request->Nama;
        $pembeli2 -> Jenis = $request->Jenis;
        $pembeli2 -> Jumlah = $request->Jumlah;
        $pembeli2->save();
        return "Pembeli berhasil ditambahkan";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembeli2  $pembeli2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $Nama = $request->Nama;
        $Jenis = $request->Jenis;
        $Jumlah = $request->Jumlah;
        
        $pembeli2 = pembeli2::find($id);
        $pembeli2->Nama =$Nama;
        $pembeli2->Jenis =$Jenis;
        $pembeli2->Jumlah=$Jumlah;
        $pembeli2->save();

        return "Pembeli berhasil dimodifikasi";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembeli2  $pembeli2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $pembeli2 = pembeli2::find($id);
        $pembeli2 ->delete();
        
        return "Pembeli berhasil dihapus";
    }
}
