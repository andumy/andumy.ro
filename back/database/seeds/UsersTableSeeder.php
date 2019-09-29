<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Andrei Dumitrescu',
            'email' => 'andrei_dumitrescu_96@yahoo.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Shotokan!996'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
