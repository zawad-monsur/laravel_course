<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = [
            'Zawad',
            'Monsur',
            'K.M.',
            'Another name',
        ];


        return view('internals.customers', [
            'customers' => $customers,
        ]);
    }
}
