<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\RelationsController;

class RelationsController extends Controller
{
    //one to one
    public function index()
    {
        return Customer::find(1)->getorder;
    }
    //one to many
    public function relationship()
    {
        return Customer::find(5)->order;
    
    }
     //customer to order
    public function customerorder()
    {
        $order = Customer::find(5)->orders;
         return $order;
        }
     //order to customer
        public function ordercustomer()
        {
        $customer = Order::find(1)->customers;
        return $customer;
        }
}
