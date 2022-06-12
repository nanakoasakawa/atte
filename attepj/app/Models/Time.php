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
    
    //timestampを不要にした
    public $timestamps = false;

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
        if($this->hasMany('App\Models\Rest')->first()==null){
            return 0;
        }
        $start = new Carbon($this->hdelasMany('App\Models\Rest')->first()->start);
        $end = new Carbon($this->hasMany('App\Models\Rest')->first()->end);
        $rest = $start -> diffInMinutes($end);
        return $rest;
    }

    public function gettime()
    {
        //勤務時間を計算する
        if($this->hasMany('App\Models\Rest')->first()==null){
        return 0;
        }
        $timestart = new Carbon($this->start);
        $timeend = new Carbon($this->end);
        $time = $timestart -> diffInMinutes($timeend);
        $start = new Carbon($this->hasMany('App\Models\Rest')->first()->start);
        $end = new Carbon($this->hasMany('App\Models\Rest')->first()->end);
        $rest = $start -> diffInMinutes($end);
        $kintai = $time - $rest;
        return $kintai;
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
