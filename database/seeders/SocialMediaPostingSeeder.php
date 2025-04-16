<?php

namespace Database\Seeders;

use App\Models\SocialMediaPosting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaPostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialMediaPosting::factory(50)->create();

    }
}
