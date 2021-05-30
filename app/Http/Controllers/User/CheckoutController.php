<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\loaiPK;
use App\Models\PhuKien;
use App\Models\KhachHang;
use Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function getFormPay(Request $request)
    {
       
        $loaiPK = loaiPK::all();
        $cart = Cart::content();
        $PhuKien_pay = OrderDetails::groupBy('PhuKienId')       // PRODUCT PAY
                        ->selectRaw('sum(Quantity) as amount, PhuKienId')
                        ->orderBy('amount','desc')->limit(10)->get();
        $keywords = $request->txtSearch;
        if ($keywords == "") {
            $search_PhuKien = PhuKien::limit(0)->get();
        }
        else {
            $search_PhuKien = PhuKien::where("TenSP","LIKE","%".$keywords."%")->get();
        }
        return view("User.pay", compact("loaiPK", "cart","PhuKien_pay","search_PhuKien"));

    }

    public function postFormPay(Request $request)
    {
      
        $c_id = $request->txtid;
        $totalMoney = str_replace(",","",Cart::subtotal(0,3));

        $KhachHang_id = KhachHang::insertGetId([
            "UserId" => $c_id,
            "TenKhachHang" => $request->txtName,
            "NgaySinh" => $request->txtDate,
            "DiaChi" => $request->txtad,
            "Phone" => $request->txtPhone,
            "Email" => $request->txtEmail,
            'created_at' => now(),
            'updated_at' => now()
        ]);
 
        if ($KhachHang_id) {
            $order_id = Orders::insertGetId([
            'KhachHangId' => $KhachHang_id,
            'total' => (int)$totalMoney,
            'Note' => $request->txtNote,
            'OrderDate' => now(),
            'ShipPhone' => $request->txtPhone,
            'ShipAddress' => $request->txtad,
            'Status' => 0,
            'created_at' => now(),
            'updated_at' => now()

            ]);
        
        }
      
        if ($order_id) {
           $cart = Cart::content();
           foreach ($cart as $key => $value) {
               OrderDetails::insert([
                    'OrderId' => $order_id,
                    'PhuKienId' => $value->id,
                    'Quantity' => $value->qty,
                    'UnitPrice' => $value->price,
                    'AddDate' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
               ]);
           }
        }
       
        Cart::destroy();
        return redirect()->route("checkout_success")->with("success","Đặt hàng thành công");

      
    }

    public function success(Request $request)
    {
        $loaiPK = loaiPK::all();
        $cart = Cart::content();
        $PhuKien_pay = OrderDetails::groupBy('PhuKienId')       // PRODUCT PAY
                                    ->selectRaw('sum(Quantity) as amount, PhuKienId')
                                    ->orderBy('amount','desc')->limit(10)->get();
        $keywords = $request->txtSearch;
        if ($keywords == "") {
            $search_PhuKien = PhuKien::limit(0)->get();
        }
        else {
            $search_PhuKien = PhuKien::where("TenSP","LIKE","%".$keywords."%")->get();
        }
       return view("User.checkout_success", compact("loaiPK", "cart","PhuKien_pay","search_PhuKien"));
    }
}
