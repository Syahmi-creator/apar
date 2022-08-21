<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class additionalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "secrh",
            'email' => 'secrh@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => "secph",
            'email' => 'secph@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => "secvh",
            'email' => 'secvh@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => "secjh",
            'email' => 'secjh@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => "secbh",
            'email' => 'secbh@gmail.com',
            'password' => Hash::make('password'),
        ]);

    }
}
