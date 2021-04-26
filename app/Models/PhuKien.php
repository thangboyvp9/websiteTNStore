<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhuKien extends Model
{
    //
    protected $table = "phu_kiens";
    protected $fillable = [
        'MaSP',
        'TenSP',
        'Donvi',
        'MoTa',
        'HinhAnh',
        'DonGia'
    ];
    protected $primaryKey = 'id';
    public function LoaiPK()
    {
        return $this->belongsTo("App\Models\loaiPK", 'MaLoai');
    }
}
