<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {

        $customers = Customer::all();
        // $activeCustomers = Customer::active()->get();
        // $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();

        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();
        return view('customers.create', compact('companies'));
    }

    public function store()
    {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'number' => 'required|min:12|numeric',
            'active' => 'required',
            'company_id' => 'required'
        ]);

        Customer::create($data);

        return redirect('customers');
    }
}
