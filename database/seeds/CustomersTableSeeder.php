<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => '佐藤',
            'age' => 90,
        ];
        DB::table('customers')->insert($param);

        $param = [
            'name' => '田中',
            'age' => 80,
        ];
        DB::table('customers')->insert($param);

        $param = [
            'name' => '斉藤',
            'age' => 85,
        ];
        DB::table('customers')->insert($param);
    }
}
