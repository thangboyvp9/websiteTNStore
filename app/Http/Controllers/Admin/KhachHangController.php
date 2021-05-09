<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KhachHang;
use Carbon\Carbon;

class KhachHangController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //
        $db = KhachHang::paginate(5);
        return view("Admin.KhachHang",['db'=>$db]);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
        return view("Admin.add_KhachHang");
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
        $Khachhang = new KhachHang();
        $Khachhang->TenKhachHang = $request->txtName;
        $Khachhang->NgaySinh = $request->txtNgaySinh;
        $Khachhang->DiaChi = $request->txtDiaChi;
        $Khachhang->Phone = $request->txtSDT;
        $Khachhang->Email = $request->txtEmail;
        $Khachhang->save();
        
        return redirect()->route('KhachHang.index')->with("message","Thêm khách hàng thành công");
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
    public function edit($id=null)
    {
        //
        if ($id == null) {
            return redirect()->route("KhachHang.index");
        }
        else {
            $db = KhachHang::find($id);
            return view("Admin.add_KhachHang",['db'=>$db]);
        }
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
        $db = KhachHang::find($id);
        $db->TenKhachHang = $request->input('txtName');
        $db->NgaySinh = $request->input('txtNgaySinh');
        $db->DiaChi = $request->input('txtDiaChi');
        $db->Phone = $request->input('txtSDT');
        $db->Email = $request->input('txtEmail');
        $db->save();
        return redirect()->route('KhachHang.index',[$id])->with("message","Cập nhật thành công");
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //
        $db = KhachHang::findOrFail($id);
        $db->delete();
        return redirect()->route("KhachHang.index")->with("Xóa thành công");
    }
    
    public function search(Request $request)
    {
        //
        $text = $request->input("txtSearch");
        if ($text == "") {
            $db = KhachHang::paginate(10);
        }
        else {
            $db = KhachHang::where('TenKhachHang','LIKE','%'.$text.'%')->paginate(50);
        }
        return view('Admin.KhachHang', ['db'=>$db]);
    }
}