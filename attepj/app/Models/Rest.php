<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'start', 'end'];

    public static $rules = array(
        'date' => 'required',
        'start' => 'required',
        'end' => 'required',
    );
}
