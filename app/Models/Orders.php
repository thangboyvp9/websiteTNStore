<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $table = "orders";
    protected $fillable = [
        "KhachHangId",
        "OrderDate",
        "ShippedDate",
        "ShipPhone",
        "ShipAddress",
        "Status",
        "TotalMoney"
    ];
    protected $primaryKey = "id";

    public function KhachHang()
    {
        return $this->belongsTo("App\Models\KhachHang", 'KhachHangId');
    }

    public function order_details()
    {
        return $this->hasMany("App\Models\order_details", "OrderId");
    }
}