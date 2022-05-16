<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
            'user_id' => '2',  
            'date' => '2022-05-14',
            'start' => '08:00:00',
            'end' => '17:00:00',
        ];
        DB::table('times')->insert($param);
    }
}
