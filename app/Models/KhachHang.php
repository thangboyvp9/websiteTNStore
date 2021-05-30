<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    //
    protected $table = "khach_hangs";
    protected $fillable = [
        "TenKhachHang",
        "NgaySinh",
        "DiaChi",
        "Phone",
        "Email"
    ];
    protected $primaryKey = "id";

    public function orders()
    {
        return $this->hasMany("App\Models\Orders", "KhachHangId");
    }

   
}
