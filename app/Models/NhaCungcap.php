<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    //
    protected $table = "nha_cungcaps";
    protected $fillable = [
        'TenNhaCungCap',
        'DiaChi',
        'Phone',
        'Email'
    ];
    protected $primaryKey = 'id';
}
