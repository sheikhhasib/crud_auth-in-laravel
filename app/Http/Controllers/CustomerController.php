<?php

namespace App\Http\Controllers;
use App\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerdashboard(){
        $customers = Customer::all();
        return view('crud.customerpage',compact('customers'));
    }
}
