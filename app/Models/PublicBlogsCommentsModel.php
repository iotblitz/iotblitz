<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicBlogsCommentsModel extends Model
{
    use HasFactory;

    protected $table = "public_comments";
    protected $primaryKey = 'comments_id';
    protected $fillable = [
        "content_id","comment_by_page" ,"name", "email", "comments", "active_status"
    ];

}
