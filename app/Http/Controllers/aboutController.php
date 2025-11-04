<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index(){
        return view("about", [
            'isAdmin' => false,
            'name' => 'parvez',
            'email' => 'arparvez20@gmail.com',
            'skills' => ['laravel', 'php', 'wordpress', 'Shopify','JavaScript', 'Jquery']
        ]);
    }
}
