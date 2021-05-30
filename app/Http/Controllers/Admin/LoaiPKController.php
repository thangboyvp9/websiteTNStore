<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaiPK;
use Illuminate\Database\Eloquent\Collection;

class LoaiPKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = loaiPK::paginate(5);
        return view("Admin.LoaiPK",['db'=>$db]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Admin.create_LoaiPK");
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
        $loaiPK = new loaiPK();
        $loaiPK->MaLoaiSP = $request->txtMaLoai;
        $loaiPK->TenLoai = $request->txtTenLoai;
        $loaiPK->save();

        return redirect()->route('LoaiPK.index')->with('message','Thêm loại sách thành công');
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
        if ($id==null) {
            return redirect()->route('LoaiPK.index');
        }
        else {
            $LoaiPK = loaiPK::all();
            $db = loaiPK::find($id);
            return view("Admin.create_LoaiPK",['db'=>$db]);
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
        $db = loaiPK::find($id);
        $db->MaLoaiSP = $request->input('txtMaLoai');
        $db->TenLoai= $request->input('txtTenLoai');
        $db->save();
        return redirect()->route("LoaiPK.index", [$id])->with("message","Cập nhật thành công");
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
        $db = loaiPK::findOrFail($id);

        $db->delete();
       
        return redirect()->route('LoaiPK.index')->with("message","Xóa thành công");
    }


    public function search(Request $request)
    {
        //
        $text = $request->input("txtSearch");
        if ($text == "") {
            $db = loaiPK::paginate(10);
        }
        else {
            $db = loaiPK::where('TenLoai','LIKE','%'.$text.'%')->paginate(50);
        }
        return view('Admin.LoaiPK', ['db'=>$db]);
    }
}