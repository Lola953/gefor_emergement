<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cours;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->count(5)
            ->has(
                Cours::factory()
                    ->count(5)
            )
            ->create();
    }
}
