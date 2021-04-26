<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loaiPK extends Model
{
    //
    protected $table = "loai_p_k_s";
    protected $fillable = [
        'MaLoaiSP',
        'TenLoai',
    ];
    protected $primaryKey = "MaLoaiSP";
    
    public function PhuKien()
    {
        return $this->hasMany("App\Models\PhuKien","MaLoai");
    }
}
