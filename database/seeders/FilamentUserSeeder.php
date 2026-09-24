<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FilamentUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'red@red.com'],
            [
                'name' => 'RED',
                'password' => Hash::make('red'),
            ]
        );
    }
}