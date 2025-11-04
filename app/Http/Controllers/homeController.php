<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view("home", [
            'isAdmin' => false,
            'name' => 'parvez',
            'email' => 'arparvez20@gmail.com',
            'skills' => ['laravel', 'php', 'wordpress', 'Shopify','JavaScript', 'Jquery']
        ]);
    }
}
