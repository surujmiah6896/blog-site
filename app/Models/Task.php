<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'is_completed', 'created_at'];
}
