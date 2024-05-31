<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCareersModel extends Model
{
    use HasFactory;

    protected $table = "jobs_careers";
    protected $primaryKey = 'careers_id';
    protected $fillable = [
        "role_id", "title", "end_date", "cities_id", "experience", "note", "minimum_qualifications", "preferred_qualifications", "about_job", "responsibilities", "status", "create_by"
    ];

}
