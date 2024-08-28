<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::query()->where('email','admin@gmail.com')->first();
        $role = Role::query()->where('title','admin')->first();
        $userRole = UserRole::query()->where('user_id',$user->id)->where('role_id',$role->id)->exists();
        if(!$userRole){
            UserRole::query()->create(['user_id'=>$user->id,'role_id'=>$role->id]);
        }
    }
}
