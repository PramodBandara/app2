<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class app2controller extends Controller
{
    public function appp2()
    {
        return view('app2');
    }

    public function about()
    {
        return view('about');

    }
    public function contact()
    {
        return view('contact');
    }

    public function work()
    {
        return view('work');
    }
    public function center()
    {
        return view('center');
    }  
    public function order()
    {
        return view('order');
    } 
    public function placeorder()
    {
        return view('placeorder');
    }
    
    

    
   
}
