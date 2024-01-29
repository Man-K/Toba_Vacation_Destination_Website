<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alam extends Model
{
    use HasFactory;
    protected $table = 'alam';
    protected $guarded = ['id'];
}
