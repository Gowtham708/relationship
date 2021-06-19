<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'name','email'
    ];
    //one to one
    public function getorder()
    {
        return $this->hasOne('App\Models\Order');
    }
    //one to many
    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
    //many to many
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }
}
