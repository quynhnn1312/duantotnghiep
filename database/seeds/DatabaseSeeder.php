<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            'full_name' => 'nghiem quynh',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1'),
            'avatar' => '',
            'phone' => '',
            'status' => 1
        ]);

        \DB::table('students')->insert([
            'full_name' => 'nghiem quynh',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1'),
            'avatar' => '',
            'phone' => '',
            'status' => 1
        ]);

        \DB::table('teachers')->insert([
            'full_name' => 'nghiem quynh',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1'),
            'avatar' => '',
            'phone' => '',
            'status' => 1
        ]);
    }
}
