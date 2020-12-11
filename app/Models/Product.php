<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'pro_id';
    protected $table = 'Product';
    protected $fillable = [
        'pro_cate',
        'pro_name',
        'pro_price',
        'pro_thumb',
        'pro_image',
        'pro_descrition',
    ];
    use HasFactory;
}
