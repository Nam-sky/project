<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'cate_id';
    protected $table = 'Category';
    protected $fillable = [
      'cate_name',
    ];
    use HasFactory;
}
