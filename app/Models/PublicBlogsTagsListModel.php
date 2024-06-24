<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicBlogsTagsListModel extends Model
{
    use HasFactory;
    protected $table = "public_blog_tag_list";
    protected $primaryKey = 'id';
    protected $fillable = [
        "blog_id","blog_tags_id"
    ];
    public function tag()
    {
        return $this->belongsTo(PublicBlogsTagsModel::class, 'blog_tags_id', 'blog_tags_id');
    }
}
