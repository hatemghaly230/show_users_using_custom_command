<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=10;$i++){
            DB::table('users')->insert([
                'name' => Str::random(10),
                'address' => Str::random(10),
                'age' =>rand(20,100),
            ]);
        }

    }
}
