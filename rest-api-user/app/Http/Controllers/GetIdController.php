<?php

namespace App\Http\Controllers;

use App\Models\pembeli2;
use Illuminate\Http\Request;

class GetIdController extends Controller
{
    public function showId(Request $request){
        $id = $request->id;
        return pembeli2::find($id);

    }
}