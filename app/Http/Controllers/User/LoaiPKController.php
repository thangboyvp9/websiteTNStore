<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaiPK;


class LoaiPKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $db = loaiPK::all();
        return view("new.index",['db'=>$db]);

    }
    public function edit($id=null)
    {
        if($id==null){
            return redirect()->route("index");
        }
        else {
            $db=loaiPK::find($id);
            return view("new.edit",['db'=>$db]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id =$request->input('txtid');
        $db = loaiPK::find($id);
        $db->MaLoaiSP = $request->input('txtmaloaisp');
        $db->TenLoai = $request->input('txttenloai');
        $db->save();
        return redirect()->route("index");
    }
    public function remove($id=null)
    {
        if($id!=null){
            $db=loaiPK::find($id)->delete();
        }
        return redirect()->route('index');
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
    }
}
