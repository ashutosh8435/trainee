<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
//use Illuminate\Support\Integer;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('seeder')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'Password' => Hash::make('Password'),
            //'Seeder_nu' => Integer::random(8),
        ]);
    }
}
