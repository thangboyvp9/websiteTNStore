<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaiPK;
use App\Models\PhuKien;

class CTPhuKienController extends Controller
{
    //
    public function index($id)
    {
        $loaiPK = loaiPK::all();
        $PhuKien = PhuKien::find($id);
        return view("user.CTPhuKien", compact("loaiPK", "PhuKien"));
    }
}