<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ListOfDepartmetsController extends Controller
{
    public function  index ()
    {
    $users = User::all();
    return view ('ListOfDepartmets')->with(['users'=> $users]);
    }

    
    
}
