<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "Wahyu Rismawan",
                "email" => "wahyurismawan@gmail.com",
                "password" => bcrypt("bismillah")
            ]
        ];

        DB::table('users')->insert($users);

    }
}
