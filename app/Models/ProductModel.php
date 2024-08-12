<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        'ProductName',
        'description',
        'unit',
        'price',
        'categoryid',
        'supplierid',
        'created_at',
        'updated_at'
    ];


   
}
