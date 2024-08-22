<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Beneth Emmanuel',
            'email' => 'benethemmanueli1701@gmail.com',
            'password' => Hash::make('Beneth@1701'),
        ]);
    }
}
