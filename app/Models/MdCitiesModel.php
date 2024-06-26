<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MdCitiesModel extends Model
{
    use HasFactory;
    protected $table = "md_lo_cities";
    protected $primaryKey = 'id';
    protected $fillable = [
        "name", "state_id", "state_code", "country_id", "country_code", "latitude", "longitude"
    ];
}
