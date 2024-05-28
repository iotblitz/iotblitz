<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicProductModel extends Model
{
    use HasFactory;
    protected $table = "public_products";
    protected $primaryKey = 'product_id';
    protected $fillable = [
   "product_category_id","product_title", "product_description","text_description","product_image","active_statu","create_by"
    ];


    public function category()
    {
        return $this->belongsTo(PublicProductCategoryModel::class, 'product_category_id', 'product_category_id');
    }
}
