<?php

namespace Database\Seeders;

use App\Models\RolePermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RolePermission::query()->updateOrCreate(['id'=>1],['role_id'=>1,'permission_id'=>1]);
        RolePermission::query()->updateOrCreate(['id'=>2],['role_id'=>1,'permission_id'=>2]);
        RolePermission::query()->updateOrCreate(['id'=>3],['role_id'=>1,'permission_id'=>3]);
        RolePermission::query()->updateOrCreate(['id'=>4],['role_id'=>1,'permission_id'=>4]);
        RolePermission::query()->updateOrCreate(['id'=>5],['role_id'=>1,'permission_id'=>5]);
        RolePermission::query()->updateOrCreate(['id'=>6],['role_id'=>1,'permission_id'=>6]);
        RolePermission::query()->updateOrCreate(['id'=>7],['role_id'=>1,'permission_id'=>7]);
        RolePermission::query()->updateOrCreate(['id'=>8],['role_id'=>1,'permission_id'=>8]);
        RolePermission::query()->updateOrCreate(['id'=>9],['role_id'=>1,'permission_id'=>9]);
        RolePermission::query()->updateOrCreate(['id'=>10],['role_id'=>1,'permission_id'=>10]);
        RolePermission::query()->updateOrCreate(['id'=>11],['role_id'=>1,'permission_id'=>11]);
        RolePermission::query()->updateOrCreate(['id'=>12],['role_id'=>1,'permission_id'=>12]);
    }
}
