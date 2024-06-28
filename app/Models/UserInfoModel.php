<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfoModel extends Model
{
    use HasFactory;

    protected $table = "users_info";
    protected $primaryKey = 'users_info_id';
    protected $fillable = [
       "user_id", "about", "facebook", "x_twiter", "instagram", "linkdin", "youtube", "create_by"
    ];


}
