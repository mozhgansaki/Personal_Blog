<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_user = User::query()->where('email','admin@gmail.com')->exists();
        if(!$admin_user){
            User::factory()->count(1)->create();
        }

    }
}
