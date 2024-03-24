<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicBlogsCommentsModel extends Model
{
    use HasFactory;

    protected $table = "public_blog_comments";
    protected $primaryKey = 'blog_comments_id';
    protected $fillable = [
        "blog_id","name", "email", "comments", "active_status"
    ];

}
