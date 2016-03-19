<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IbadahItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ["name" => "Qiyamulail", "is_required" => 0],
            ["name" => "Shubuh Berjamaah", "is_required" => 0],
            ["name" => "Dhuha", "is_required" => 0],
            ["name" => "Tilawah Harian", "is_required" => 1],
            ["name" => "Infaq", "is_required" => 0],
        ];

        DB::table('ibadah_items')->insert($items);
    }
}
