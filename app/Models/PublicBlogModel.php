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
        "blog_title", "blog_keywords", "blog_description", "text_description", "blog_image", "featured_image_alt_text", "image_description", "image_caption", "image_title", "meta_title", "meta_descriptions", "focus_keyword", "blog_excerpt", "active_status", "create_by"
    ];



    public function public_comments()
    {
        return $this->hasMany(PublicBlogsCommentsModel::class,'content_id','blog_id')->where('active_status', 'A')->where('comment_by_page', 'B');
    }

    public function public_tags()
    {
        return $this->hasMany(PublicBlogsTagsListModel::class,'blog_id','blog_id');
    }
}
