<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'ryoichi',
            'role' => 'admin',
            'email' => 'kusaka551124@icloud.com',
            'password' => bcrypt('Ryo19866972'),
        ];
        DB::table('users')->insert($param);
    }
}
