<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MdCountriesModel extends Model
{
    use HasFactory;
    protected $table = "md_lo_countries";
    protected $primaryKey = 'id';
    protected $fillable = [
        "name", "iso3", "numeric_code", "iso2", "phonecode", "capital", "currency", "currency_name", "currency_symbol", "tld", "native", "region", "region_id", "subregion", "subregion_id", "nationality", "timezones", "translations", "latitude", "longitude", "emoji", "emojiU", "flag", "wikiDataId"
    ];
}
