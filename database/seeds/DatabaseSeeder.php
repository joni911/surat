<?php

use App\jabatan;
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
            "name" => "joni",
            "email" => "joni@admin.com",
            "hak_akses" =>"administrator",
            "no_wa" =>"085739185699",
            "password" => Hash::make('admin')
            ]);
        jabatan::create([
            'jabatan' => 'turt',
            'user_id' => 1,
        ]);
    }
}
