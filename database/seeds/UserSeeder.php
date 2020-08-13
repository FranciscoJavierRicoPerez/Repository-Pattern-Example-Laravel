<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Francisco Javier',
            'email' => 'francisco@gmail.com',
            'password' => '1234'
        ]);
    }
}
