<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpCareersModel extends Model
{
    use HasFactory;

    protected $table = "jobs_applied_employee";
    protected $primaryKey = 'applied_employee_id';
    protected $fillable = [
       "carcers_id","name", "email", "mobile", "about", "cv_file","active_status"
    ];
}
