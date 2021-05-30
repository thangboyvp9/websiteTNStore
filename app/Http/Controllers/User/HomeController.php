<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaiPK;
use App\Models\PhuKien;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $loaiPK = loaiPK::all();
        // $PhuKien = PhuKien::limit(8)->get();
        $PhuKien = PhuKien::orderby("DonVi", 'desc')->limit(8)->get();
        $keywords = $request->txtSearch;    
        if ($keywords == "") {
            $search_PhuKien = PhuKien::limit(0)->get();
        }
        else {
            $search_PhuKien = PhuKien::where("TenSP","LIKE","%".$keywords."%")->get();
        }
        return view("User.index", compact("loaiPK", "PhuKien", "search_PhuKien"));
    }

    public function search(Request $request)
    {
        $loaiPK = loaiPK::all();
        $keywords = $request->txtSearch;    
        if ($keywords == "") {
            $search_PhuKien = PhuKien::limit(0)->get();
        }
        else {
            $search_PhuKien = PhuKien::where("TenSP","LIKE","%".$keywords."%")->get();
        }
       return view("User.search", compact("loaiPK","search_PhuKien"));
    }
}
