<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaiPK;
use App\Models\PhuKien;


class PhuKienController extends Controller
{
    //
    public function index($id)
    {
        $loaiPK = loaiPK::all();
        $PhuKiens = PhuKien::where("MaLoai", $id)->paginate(9);
        // dd($PhuKiens);
        return view("user.PhuKien", compact("loaiPK","PhuKiens"));
    }
}
