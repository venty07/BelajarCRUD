<?php

namespace Database\Seeders;

use App\Models\Anggota;
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

        Anggota::create([
            'nama' => 'ventiana jelita',
            'hp' => '08347636'
        ]);
        Anggota::create([
            'nama' => 'venti',
            'hp' => '083476309'
        ]);
        Anggota::create([
            'nama' => 'jelitaaa',
            'hp' => '0834763609'
        ]);
    }
}

