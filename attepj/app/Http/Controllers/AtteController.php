<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\Rest;

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

    public function date(Request $request)
    {
        $items = Time::Paginate(5);
        return view('date', ['items' => $items]);
        $date = date("Y-m-d");
    }
    
    }


