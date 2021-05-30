<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    //
    protected $table = "order_details";
    protected $fillable = [
        "PhuKienId",
        "ProductId",
        "Quantity",
        "UnitPrice",
        "AddDate"
    ];
    protected $primaryKey = "id";

    public function order()
    {
        return $this->belongsTo("App\Models\Orders", "OrderId");
    }

    public function PhuKien()
    {
        return $this->belongsTo("App\Models\PhuKien","PhuKienId");
    }
}