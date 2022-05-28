<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'time_id' => '1',  
            'start' => '12:00:00',
            'end' => '13:00:00',
        ];
        DB::table('rests')->insert($param);
    }
}
