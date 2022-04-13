<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'tony',
            'email' => '9999@abc.co.jp',
            'password' => 'American'
        ];
        DB::table('users')->insert($param);
    }
}
