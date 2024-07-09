<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Permissions
        Permission::create(['name' => 'view role', 'group_name' => 'Role']);
        Permission::create(['name' => 'create role', 'group_name' => 'Role']);
        Permission::create(['name' => 'update role', 'group_name' => 'Role']);
        Permission::create(['name' => 'delete role', 'group_name' => 'Role']);

        Permission::create(['name' => 'view permission', 'group_name' => 'Permission']);
        Permission::create(['name' => 'create permission', 'group_name' => 'Permission']);
        Permission::create(['name' => 'update permission', 'group_name' => 'Permission']);
        Permission::create(['name' => 'delete permission', 'group_name' => 'Permission']);

        Permission::create(['name' => 'view user', 'group_name' => 'User']);
        Permission::create(['name' => 'create user', 'group_name' => 'User']);
        Permission::create(['name' => 'update user', 'group_name' => 'User']);
        Permission::create(['name' => 'delete user', 'group_name' => 'User']);

        // Create Roles
        $superAdminRole = Role::create(['name' => 'super-admin']); //as super-admin
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Lets give all permission to super-admin role.
        $allPermissionNames = Permission::pluck('name')->toArray();

        $superAdminRole->givePermissionTo($allPermissionNames);

        // Let's give few permissions to admin role.
        $adminRole->givePermissionTo(['create role', 'view role', 'update role']);
        $adminRole->givePermissionTo(['create permission', 'view permission']);
        $adminRole->givePermissionTo(['create user', 'view user', 'update user']);

        // Let's give few permissions to User role.
        $userRole->givePermissionTo(['create role', 'view role', 'update role']);
        $userRole->givePermissionTo(['create permission', 'view permission']);
        $userRole->givePermissionTo(['create user', 'view user', 'update user']);

        // Let's Create User and assign Role to it.
        $superAdminUser = User::firstOrCreate(
            [
                'email' => 'superadmin@gmail.com',
            ],
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('12345678'),
            ]
        );

        $superAdminUser->assignRole($superAdminRole);

        $adminUser = User::firstOrCreate(
            [
                'email' => 'admin@gmail.com'
            ],
            [
                'name' => 'Admin Devzet',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
            ]
        );

        $adminUser->assignRole($adminRole);

        $userRole = User::firstOrCreate(
            [
                'email' => 'abdullah@gmail.com'
            ],
            [
                'name' => 'User Abdullah',
                'email' => 'abdullah@gmail.com',
                'password' => Hash::make('12345678'),
            ]
        );
        $userRole->assignRole($adminRole);
    }
}
