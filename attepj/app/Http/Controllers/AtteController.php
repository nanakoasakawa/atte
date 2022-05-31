<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\Rest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        $date = $request->kintaidate;
        if($date == null){
            $date = date('Y-m-d');
        }
        $items = Time::where('date', $date)->paginate(5);
        $param = ['date'=> $date,'items'=>$items];
        return view('date',$param);
    }

    //勤務開始時間の登録
    public function startadd(Request $request){
        $param=[
            'user_id'=>$request->user_id,
            'date'=>new Carbon(),
            'start'=>new Carbon(),
        ];
        DB::table('times')->insert($param);
        return redirect('/');
    }
    }


