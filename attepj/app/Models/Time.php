<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Time extends Model
{
    use HasFactory;

    protected $fillable = ['date','start', 'end'];

    public static $rules = array(
        'date' => 'required',
        'start' => 'required',
        'end' => 'required',
    );

    public function getstart()
    {
        // 開始時間を取ってくる
        $item = $this->start;
        return $item;
    }

    public function getend()
    {
        // 終了時間を取ってくる
        $item = $this->end;
        return $item;
    }

    
    public function getrest()
    {
        //休憩時間を計算する
        $start = new Carbon($this->hasMany('App\Models\Rest','time_id')->first()->start);
        $end = new Carbon($this->hasMany('App\Models\Rest','time_id')->first()->end);
        $rest = $start->diffInMinutes($end);
        return $rest;
    }
}
