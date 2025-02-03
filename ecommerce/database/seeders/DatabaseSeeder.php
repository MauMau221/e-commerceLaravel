<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        User::factory(5)->create();
        Categoria::factory(3)->create();
        Produto::factory(10)->create();
    }
}
