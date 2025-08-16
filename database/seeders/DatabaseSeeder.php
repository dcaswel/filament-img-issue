<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Derek Caswell',
            'email' => 'derek.caswell@gmail.com',
        ]);

        Book::factory()->create([
            'title' => 'Freefall',
            'cover' => '01K2TCEEF9MAERA43JE1NW3GAK.jpg'
        ]);

        Book::factory()->create([
            'title' => 'The Hitchhiker\'s Guide to the Galaxy',
            'cover' => 'bad-url.jpg'
        ]);

        Book::factory()->create([
            'title' => 'The Hobbit',
            'cover' => null
        ]);
    }
}
