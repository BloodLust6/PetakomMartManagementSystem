<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    protected $table = 'master_time';
    protected $primaryKey = 'id';
    protected $fillable = ['time'];
}
