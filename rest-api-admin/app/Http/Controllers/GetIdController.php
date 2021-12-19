<?php

namespace App\Http\Controllers;

use App\Models\Handphone2;
use Illuminate\Http\Request;

class GetIdController extends Controller
{
    public function showId(Request $request){
        $id = $request->id;
        return Handphone2::find($id);

    }
}