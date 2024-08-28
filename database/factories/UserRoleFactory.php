<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserRole>
 */
class UserRoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $user = User::query()->where('email','admin@gmail.com')->first();
       $role = Role::query()->where('title','admin')->first();
        return [
            'user_id'=>$user->id,
            'role_id'=>$role->id

        ];
    }
}
