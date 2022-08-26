<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::where('active', 1)->get();
        $inactiveCustomers = Customer::where('active', 0)->get();


        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers'));
    }

    public function store()
    {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'number' => 'required|min:12|numeric',
            'active' => 'required'
        ]);


        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->number = request('number');
        $customer->active = request('active');
        $customer->save();



        return back();
    }
}
