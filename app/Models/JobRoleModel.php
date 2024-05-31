<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRoleModel extends Model
{
    use HasFactory;

    protected $table = "jobs_careers_role";
    protected $primaryKey = 'careers_role_id';
    protected $fillable = [
       "role"
    ];

}
