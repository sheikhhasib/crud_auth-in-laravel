<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CrudController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $customers = Customer::all();
        return view('crud.index',compact('customers'));
    }

    public function crudinsert(){
        return view('crud.insert');
    }
    public function crudinsertdata(Request $request){
        $request->validate([
            'name'=> 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
           ]);
           $customer = new Customer();
           $customer->name = $request->name;
           $customer->email = $request->email;
           $customer->phone = $request->phone;
           $customer->city = $request->city;
           $customer->save();
           $customer->id;
           return back()->with('status','data inserted successfully');

    }

    public function customerdelete($id){
        $row = Customer::where('id',$id)->delete();
        return back()->with('delete','data deleted successfully');
    }
    public function customeredit($id){
        $customers = Customer::findOrFail($id);
        return view('crud.edit',compact('customers'));
    }
    public function customerupdate(Request $request){
        $customers = Customer::where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
        ]);
        return back()->with('update','updated successfully');
    }
}
