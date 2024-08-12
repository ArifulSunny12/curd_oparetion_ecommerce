<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $fillable = [
        
        'CategoryName',
        'Description',
        'created_at',
        'updated_at'
    ];
}
