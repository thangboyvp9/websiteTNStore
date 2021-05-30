<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaiPK;
use App\Models\PhuKien;


class PhuKienController extends Controller
{
    //
    public function index($id,Request $request)
    {
        $loaiPK = loaiPK::all();
        $PhuKiens = PhuKien::where("MaLoai", $id)->paginate(9);
          //SORT PRODUCT 
        //   if ($request->orderby) {
        //     $orderby = $request->orderby;
        //     switch ($orderby){
        //         case 'desc': // NEW
        //             $PhuKiens = PhuKien::where("MaLoai", $id)->orderBy('id','DESC')->get();
        //             break;
        //         case 'asc':  //OLD
        //             $PhuKiens = PhuKien::where("MaLoai", $id)->orderBy('id','ASC')->get();
        //             break;
        //         case 'price_max': // ascending
        //               $PhuKiens = PhuKien::where("MaLoai", $id)->orderBy('DonGia','ASC')->get();
        //               break;
        //         case 'price_min': //decrease
        //             $PhuKiens = PhuKien::where("MaLoai", $id)->orderBy('DonGia','DESC')->get();
        //             break;
        //         default:
        //              $PhuKiens = PhuKien::where("MaLoai", $id)->orderBy('id','DESC')->get();
                    
        //     }
        // }
        // dd($PhuKiens);
        return view("user.PhuKien", compact("loaiPK","PhuKiens"));

  
    }
}
