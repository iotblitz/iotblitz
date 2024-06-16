<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicContactModel extends Model
{
    use HasFactory;


    protected $table = "public_contact";
    protected $primaryKey = 'contact_id';
    protected $fillable = [
       "name", "email", "mobile", "message"
    ];
}
