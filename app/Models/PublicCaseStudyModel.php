<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicCaseStudyModel extends Model
{
    use HasFactory;

    protected $table = "public_case_study";
    protected $primaryKey = 'case_study_id';
    protected $fillable = [
        "case_study_title", "case_study_keywords", "case_study_description", "text_description", "case_study_image", "active_status", "create_by"
    ];


    public function public_comments()
    {
        return $this->hasMany(PublicBlogsCommentsModel::class,'content_id','case_study_id')->where('active_status', 'A')->where('comment_by_page', 'CS');
    }

}
