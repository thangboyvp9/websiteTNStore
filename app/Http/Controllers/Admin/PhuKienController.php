<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\loaiPK;
use App\Models\PhuKien;

class PhuKienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = PhuKien::paginate(10);
        return view('Admin.PhuKien', compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     
     
        // return view("Admin.PhuKien", ['db'=>$db]);
    }

    // // public function doUpload(Request $request)
    // // {
    // //     $file = $request->filesTest;

    // //     $file->move('upload', $file->getClientOriginalName());
    // //     // hàm sẽ trả về đường dẫn mới của file trên server nếu thành công
    // //     // còn nếu không nó sẽ raise ra exception.
    // // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        //
        $PhuKien = new PhuKien();
        $PhuKien->TenSP = $request->txtTenSP;
        $PhuKien->MaSP = $request->txtMaSP;
        $PhuKien->MaLoai = $request->txtTenLoai;
        $PhuKien->DonVi = $request->txtDonVi;
        $PhuKien->MoTa = $request->txtMoTa;
        
        if($request->hasfile('fileImg')){
            $file = $request->file('fileImg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img', $filename);
            $PhuKien->HinhAnh = $filename;
        }
        else {
            return $request;
            $PhuKien->HinhAnh = "";
        }

        $PhuKien->DonGia = $request->txtDonGia;
        $PhuKien->save();

        // dd($PhuKien);
        return redirect()->route('PhuKien.index')->with('message', 'Thêm sản phẩm thành công');

    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id=null)
    {
        //
        if ($id==null) {
            return redirect()->route("PhuKien.index");
        }
        else {
            $LoaiPK = loaiPK::all();
            $db = PhuKien::find($id);
            // dd($db, $LoaiPK);
            return view("Admin.create",compact("LoaiPK","db"));
        }
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        //
        $db = PhuKien::find($id);
        $db->MaSP = $request->input('txtMaSP');
        $db->TenSP = $request->input('txtTenSP');
        $db->MaLoai = $request->input('txtTenLoai');
        $db->DonVi = $request->input('txtDonVi');
        $db->MoTa = $request->input('txtMoTa');        
        if($request->hasfile('fileImg')){
            $file = $request->file('fileImg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img', $filename);
            $db->HinhAnh =  $filename;

        }
        else {
            // return $request;
            $db->HinhAnh = "";
        }

        $db->DonGia = $request->input('txtDonGia');
        $db->save();
        return redirect()->route("PhuKien.index", [$id])->with('message', 'Cập nhật sản phẩm thành công');

    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        //
        $db = PhuKien::findOrFail($id);
        $db->delete();
        return redirect()->route("PhuKien.index")->with('message', 'Xóa sản phẩm thành công');
    }

    
    // public function search(Request $request)
    // {
    //     //
    //     $text = $request->input("txtSearch");
    //     if ($text == "") {
    //         $db = Products::paginate(6);
    //     }
    //     else {
    //         $db = Products::where('ProductName','LIKE','%'.$text.'%')->paginate(50);
    //     }
    //     return view('admin.product', ['db'=>$db]);
    // }
}
