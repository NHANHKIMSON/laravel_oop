<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'p_type_id', 'cate_id', 'user_id',
        'p_code', 'p_name', 'unit', 'coast', 'price', 'qty', 'photo', 'note'
    ];

    public function type()
{
    return $this->belongsTo(ProductType::class, 'p_type_id');
}

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
