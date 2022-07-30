<?php

namespace Database\Seeders;

use App\Models\Plants\Plant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User([
            'name' => 'Admin',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
        ]);
        $admin->save();

        Plant::factory()->count(50)->create(['owned_by' => $admin->id]);
    }
}
