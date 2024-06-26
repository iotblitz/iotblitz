<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicProductCategoryModel extends Model
{
    use HasFactory;
    protected $table = "public_product_category";
    protected $primaryKey = 'product_category_id';
    protected $fillable = [
        "category", "created_by"
    ];



    public function products()
    {
        return $this->hasMany(PublicProductModel::class, 'product_category_id', 'product_category_id');
    }

}
