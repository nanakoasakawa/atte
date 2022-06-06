<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\Rest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    public function timein(Request $request){
        $param=[
            'user_id'=>Auth::id(),
            'date'=>new Carbon(),
            'start'=>new Carbon(),
            'end'=>empty($value) ? null : $value,
        ];
        DB::table('times')->insert($param);
        return redirect('/');
    }

            //勤務終了時間の登録
    public function timeout(Request $request){
        $time=Time::where('user_id','=',Auth::id())
                  ->where('date','=',new Carbon('today'))
                  ->update(['end'=>new Carbon()]);
        return redirect('/');
    }

            //休憩開始時間の登録
    public function restin(Request $request){
        $param=[
            'time_id'=>Time::where('date',new Carbon('today')),
            'start'=>new Carbon(),
            'end'=>empty($value) ? null : $value,
        ];
        DB::table('rests')->insert($param);
        return redirect('/');
    }

                //休憩終了時間の登録
    public function restout(Request $request){
        $param=[
            'start'=>empty($value) ? null : $value,
            'end'=>new Carbon(),
        ];
        DB::table('rests')->insert($param);
        return redirect('/');
    }
    }


