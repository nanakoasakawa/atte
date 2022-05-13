<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $fillable = ['start', 'end'];

    public static $rules = array(
        'start' => 'required',
        'end' => 'required',
    );

    public function getDetail1()
    {
        // 開始時間を取ってくる
        $item = $this->start;
        return $item;
    }

    public function getDetail2()
    {
        // 終了時間を取ってくる
        $item = $this->end;
        return $item;
    }
}
