<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BeckItem;
use App\Models\UsdiDepressionLevel;
use App\Models\UsdiOption;
use App\Models\UsdiQuestion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BeckItemSeeder::class,
            BeckOptionSeeder::class,
            UserSeeder::class,
            BeckDepressionLevelSeeder::class,
            UsdiOptionSeeder::class,
            UsdiQuestionSeeder::class,
            UsdiDepressionLevelSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
