<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $fillable = ['type', 'note'];

    public function products()
    {
        return $this->hasMany(Product::class, 'p_type_id');
    }
}
