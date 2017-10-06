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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'dev@dev.dev',
            'is_admin' => 1,
            'password' => bcrypt('1234'),
        ]);
    }
}
