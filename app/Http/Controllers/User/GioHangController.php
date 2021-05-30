<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaiPK;
use App\Models\PhuKien;
use Cart;
use Section;
session_start();

class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $loaiPK = loaiPK::all();
        $cart = Cart::content();
       
        $keywords = $request->txtSearch;
        if ($keywords == "") {
            $search_PhuKien = PhuKien::limit(0)->get();
        }
        else {
            $search_PhuKien = PhuKien::where("TenSP","LIKE","%".$keywords."%")->get();
        }
        return view("User.GioHang", compact("loaiPK", "cart","search_PhuKien"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCart($id, Request $request){
        $PhuKien = PhuKien::find($id);
        if($request->qty){
            $qty = $request->qty;
        }else{
            $qty = 1;
        }
        $DonGia = $PhuKien->DonGia;
        $cart = ['id' => $id, 'name' => $PhuKien->TenSP,"qty"=>$qty , "weight"=>10, 'price' => $DonGia, 'options' => ['img' => $PhuKien->HinhAnh,"Loai"=>$PhuKien->LoaiPK->TenLoai]];
        Cart::add($cart);
        // dd(Cart::content());
        return redirect()->back()->with('message','Đã mua '.$PhuKien->TenSP.' thành công');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        //
        Cart::remove($rowId);
        // dd($rowId);
        return redirect()->route("cart.index")->with("message","Đã xóa sản phẩm khỏi giỏ hàng ");
    }
}
