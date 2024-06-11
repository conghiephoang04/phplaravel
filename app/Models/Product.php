<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
   
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    protected $table='products';
    protected $primaryKey='id';
    protected $fillable=[
        'title',
        'image',
        'price',
        'detail',
        'category_id',

    ];

}
