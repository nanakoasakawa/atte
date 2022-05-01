<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AtteController extends Controller
{
    public function index()
    {
        return view('index');
    } 
    
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return view('complete', compact('user'));
    }
}
