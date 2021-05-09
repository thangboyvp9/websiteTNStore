<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NhaCungCap;
use Carbon\Carbon;

class NhaCungCapController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //
        $db = NhaCungCap::paginate(5);
        return view("Admin.NhaCungCap",['db'=>$db]);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
        return view("Admin.add_NhaCungCap");
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
        $NhaCungCap = new NhaCungCap();
        $NhaCungCap->TenNhaCungCap = $request->txtName;
        $NhaCungCap->DiaChi = $request->txtDiaChi;
        $NhaCungCap->Phone = $request->txtSDT;
        $NhaCungCap->Email = $request->txtEmail;
        $NhaCungCap->save();
        
        return redirect()->route('NhaCungCap.index')->with("message","Thêm nhà cung cấp thành công");
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
            return redirect()->route("NhaCungCap.index");
        }
        else {
            $db = NhaCungCap::find($id);
            return view("Admin.add_NhaCungCap",['db'=>$db]);
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
        $db = NhaCungCap::find($id);
        $db->TenNhaCungCap = $request->input('txtName');
        $db->DiaChi = $request->input('txtDiaChi');
        $db->Phone = $request->input('txtSDT');
        $db->Email = $request->input('txtEmail');
        $db->save();
        return redirect()->route('NhaCungCap.index',[$id])->with("message","Cập nhật thành công");
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
        $db = NhaCungCap::findOrFail($id);
        $db->delete();
        return redirect()->route("NhaCungCap.index")->with("Xóa thành công");
    }
    
    public function search(Request $request)
    {
        //
        $text = $request->input("txtSearch");
        if ($text == "") {
            $db = NhaCungCap::paginate(10);
        }
        else {
            $db = NhaCungCap::where('TenNhaCungCap','LIKE','%'.$text.'%')->paginate(50);
        }
        return view('Admin.NhaCungCap', ['db'=>$db]);
    }
}