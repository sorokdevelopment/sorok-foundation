<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\NewsletterSeeder;
use Database\Seeders\SocialMediaPostingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Sorok Admin',
            'email' => 'sorokadmin@admin.com',
        ]);

        // $this->call([
        //     NewsletterSeeder::class,
        //     SocialMediaPostingSeeder::class,
        // ]);
    }
}
