<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaiPK;
use App\Models\PhuKien;

class HomeController extends Controller
{
    public function index()
    {
        $loaiPK = loaiPK::all();
        // $PhuKien = PhuKien::limit(8)->get();
        $PhuKien = PhuKien::orderby("DonVi", 'desc')->limit(8)->get();
        return view("User.index", compact("loaiPK", "PhuKien"));
    }
}
