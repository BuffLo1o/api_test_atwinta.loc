<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subEditController extends Controller
{
    public function index (Request $request)
    {
        $user = $request->input('name');
        $name->save(); 
    }
}
