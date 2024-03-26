<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Mart',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Cashier Mart',
            'email' => 'cashier@gmail.com',
            'password' => bcrypt('1234'),
            'role' => 'cashier',
           ]);
    }
}
