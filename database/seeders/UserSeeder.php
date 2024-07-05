<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $individualRole = Role::create(['name' => 'individual']);
        $enterpriseRole = Role::create(['name' => 'enterprise']);

        // Create admin user
        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Use a more secure password in a real application
        ]);
        $adminUser->assignRole($adminRole);

        // Create individual user
        $individualUser = User::create([
            'name' => 'Individual User',
            'email' => 'individual@example.com',
            'password' => bcrypt('password'), // Use a more secure password in a real application
        ]);
        $individualUser->assignRole($individualRole);

        // Create enterprise user
        $enterpriseUser = User::create([
            'name' => 'Enterprise User',
            'email' => 'enterprise@example.com',
            'password' => bcrypt('password'), // Use a more secure password in a real application
        ]);
        $enterpriseUser->assignRole($enterpriseRole);
    }
    }

