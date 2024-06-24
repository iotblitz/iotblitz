<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicBlogsTagsModel extends Model
{
    use HasFactory;


    protected $table = "public_blog_tags";
    protected $primaryKey = 'blog_tags_id';
    protected $fillable = [
        "tags_name","create_by"
    ];


    // public function public_comments()
    // {
    //     return $this->hasMany(PublicBlogsCommentsModel::class,'content_id','case_study_id')->where('active_status', 'A')->where('comment_by_page', 'CS');
    // }
}
