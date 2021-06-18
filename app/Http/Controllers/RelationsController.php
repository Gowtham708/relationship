<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\RelationsController;

class RelationsController extends Controller
{
    //
    public function relationship()
    {
        return Customer::find(5)->order;
    
    }
}
