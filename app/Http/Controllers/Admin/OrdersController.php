<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrderDetails;
use App\Models\KhachHang;

class OrdersController extends Controller
{

    public function index()
    {
        //
        
        $db = Orders::orderby("Status", "asc")->orderBy("id","desc")->paginate(5);
        $order_done = Orders::where("Status",1)->count();
        $order_wait = Orders::where("Status",0)->count();
        return view("Admin.Orders", compact("db","order_done","order_wait"));
    }
    
    public function show(Request $request, $id)
    {
        $order_details = OrderDetails::where("OrderId", $id)->paginate(5);
        return view("Admin.OrderDetails", compact('order_details'));
        
    }
    public function destroy($id)
    {
        //
        $db = Orders::findOrFail($id);
        $db->delete();
        return redirect()->route("order.index")->with('message', 'Xóa đơn hàng thành công');
    }

    public function search(Request $request)
    {
        //
        $order_done = Orders::where("Status",1)->count();
        $order_wait = Orders::where("Status",0)->count();
        
        $text = $request->input("txtSearch");
        if ($text == "") {
            $db = Orders::orderby("Status", "asc")->orderBy("id","desc")->paginate(5);
        }
        else {
            $db = Orders::join('KhachHang','orders.KhacHangId','=','KhachHang.id')
                            ->where('orders.OrderDate','LIKE','%'.$text.'%')
                            ->orWhere('orders.id','LIKE','%'.$text.'%')
                            ->orWhere('orders.ShipPhone','LIKE','%'.$text.'%')
                            ->orWhere('orders.ShipAddress','LIKE','%'.$text.'%')
                            ->orWhere('orders.Note','LIKE','%'.$text.'%')
                            ->orWhere('KhachHang.TenKhachHang','LIKE','%'.$text.'%')->get();
        }
        return view('Admin.Orders', compact("db","order_done","order_wait"));
    }
}
