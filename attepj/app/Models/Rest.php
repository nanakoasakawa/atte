<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Rest extends Model
{
    use HasFactory;

    protected $fillable = ['start', 'end'];

    public static $rules = array(
        'start' => 'required',
        'end' => 'required',
    );

}
