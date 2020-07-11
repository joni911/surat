<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            "name" => "admin",
            "email" => "admin@bankpasar.co.id",
            "hak_akses" =>"administrator",
            "password" => Hash::make('admin')
            ]);
    }
}
