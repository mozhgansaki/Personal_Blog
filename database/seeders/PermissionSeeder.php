<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::query()->updateOrCreate(['id'=>1],['title'=>'create-post']);
        Permission::query()->updateOrCreate(['id'=>2],['title'=>'edit-post']);
        Permission::query()->updateOrCreate(['id'=>3],['title'=>'delete-post']);
        Permission::query()->updateOrCreate(['id'=>4],['title'=>'index-post']);
        Permission::query()->updateOrCreate(['id'=>5],['title'=>'create-category']);
        Permission::query()->updateOrCreate(['id'=>6],['title'=>'edit-category']);
        Permission::query()->updateOrCreate(['id'=>7],['title'=>'delete-category']);
        Permission::query()->updateOrCreate(['id'=>8],['title'=>'index-category']);
        Permission::query()->updateOrCreate(['id'=>9],['title'=>'create-tag']);
        Permission::query()->updateOrCreate(['id'=>10],['title'=>'edit-tag']);
        Permission::query()->updateOrCreate(['id'=>11],['title'=>'delete-tag']);
        Permission::query()->updateOrCreate(['id'=>12],['title'=>'index-tag']);
    }
}
