<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MdStatesModel extends Model
{
    use HasFactory;
    protected $table = "md_lo_states";
    protected $primaryKey = 'id';
    protected $fillable = [
        "name", "country_id", "country_code", "fips_code", "iso2", "type", "latitude", "longitude", "flag", "wikiDataId"
    ];
}
