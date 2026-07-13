<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Super Admin Cakra',
            'username' => 'cakra_admin',
            'password' => \Illuminate\Support\Facades\Hash::make('PastiBisa2026'),
        ]);
    }
}