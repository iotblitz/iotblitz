<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicBlogModel extends Model
{
    use HasFactory;
    protected $table = "public_blog";
    protected $primaryKey = 'blog_id';
    protected $fillable = [
        "blog_title", "blog_keywords", "blog_description", "text_description", "blog_image","active_status", "create_by"
    ];



    public function public_comments()
    {
        return $this->hasMany(PublicBlogsCommentsModel::class,'blog_id','blog_id')->where('active_status', 'A');
    }
}
