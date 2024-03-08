<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'United kingdom']);
        Country::create(['name' => 'Greece']);

        City::create(['country_id' => 1, 'name' => 'london']);
        City::create(['country_id' => 1, 'name' => 'liverpool']);
        City::create(['country_id' => 1, 'name' => 'liecester']);
        City::create(['country_id' => 2, 'name' => 'athens']);
        City::create(['country_id' => 2, 'name' => 'patra']);
        City::create(['country_id' => 2, 'name' => 'zakynthos']);

        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Vue JS', 'slug' => 'vue-js']);
        Tag::create(['name' => 'Livewire', 'slug' => 'live-wire']);
    }
}
