<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class job extends Model{
    use HasFactory;
    protected $table="joblist";
    protected $fillable = ['title', 'salary', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}