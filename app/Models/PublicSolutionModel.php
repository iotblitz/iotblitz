<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicSolutionModel extends Model
{
    use HasFactory;

    protected $table = "public_solutions";
    protected $primaryKey = 'solutions_id';
    protected $fillable = [
        "solutions_title", "solutions_keywords", "solutions_description", "text_description", "solutions_image","solutions_brochure", "active_status", "create_by"
    ];


}
