<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'phone'    => 'required|string',
            'street'   => 'required|string',
            'zipcode'  => 'required|string',
            'province' => 'required|string',
            'additionalnote'     => 'nullable|string',
            'orderoption'     => 'nullable|string',
            
        ]);

        Order::create($data);

        return redirect()->back()->with('success', 'Order submitted successfully!');
    }

    public function admin()
    {
        $users = Order::all();
        return view('admin', compact('users'));
    }
    
}