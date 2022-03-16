<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = ["name", 'phone', 'email', 'position_id', 'chief_id', 'salary', 'employment_date',  "file_path", "created_at", "updated_at"];
}
