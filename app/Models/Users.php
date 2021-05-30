<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table = "users";
    protected $fillable = [
        "username",
        "password",
        "role_id",
        "remember_token"
    ];
    protected $primaryKey = "id";
    public function role()
    {
        return $this->belongsTo("App\Models\Roles", "role_id");
    }
}
