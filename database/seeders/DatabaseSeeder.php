<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Donor;
use App\Models\ProjectComment;
use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // UserSeeder::class,
        ]);

        // TeamMember::factory(5)->create();
        // Donor::factory(5)->create();
        // User::factory(5)->create();
        ProjectComment::factory(5)->create();
    }
}
