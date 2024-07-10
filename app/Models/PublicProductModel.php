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
   "product_category_id","product_title","keyword", "product_description","text_description","product_image","featured_image_alt_text", "image_description", "image_caption", "image_title", "meta_title", "meta_descriptions", "focus_keyword", "product_excerpt", "active_status","create_by"
    ];




     /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(PublicProductCategoryModel::class, 'product_category_id', 'product_category_id');
    }
}
