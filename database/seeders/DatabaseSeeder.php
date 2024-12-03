<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();
        \App\Models\Blog::factory(50)->create();
        \App\Models\Plongeur::factory(150)->create();
        // \App\Models\Level::factory(20)->create();
        \App\Models\Cours::factory(20)->create();
        \App\Models\Adhesion::factory(20)->create();
        \App\Models\Contact::factory(20)->create();
    }
}