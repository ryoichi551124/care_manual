<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ManualsController extends Controller
{
    //index
    public function index(Request $request)
    {
        $user = Auth::user();  
        $param = ['user' => $user];
        return view('manuals.index', $param);
    }

    //create
    public function create(Request $request)
    {
        return view('manuals.create');
    }

    //logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
