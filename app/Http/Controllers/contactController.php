<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){
        return view("contact", [
            'isAdmin' => false,
            'name' => 'parvez',
            'email' => 'arparvez20@gmail.com',
            'skills' => ['laravel', 'php', 'wordpress', 'Shopify','JavaScript', 'Jquery']
        ]);
    }
}
