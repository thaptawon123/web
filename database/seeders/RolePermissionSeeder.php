<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Admin;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define permissions
        $permissions = [
            'faculty.view', 'faculty.create', 'faculty.update', 'faculty.delete',
            'news.view', 'news.create', 'news.update', 'news.delete',
            'settings.view', 'settings.update',
            'users.view',
        ];

        foreach ($permissions as $p) {
            Permission::firstOrCreate(['name' => $p, 'guard_name' => 'admin']);
        }

        // Create roles
        $super = Role::firstOrCreate(['name' => 'super-admin', 'guard_name' => 'admin']);
        $content = Role::firstOrCreate(['name' => 'content-admin', 'guard_name' => 'admin']);
        $faculty = Role::firstOrCreate(['name' => 'faculty-admin', 'guard_name' => 'admin']);

        // Assign permissions to roles
        $super->syncPermissions(Permission::where('guard_name','admin')->pluck('name')->toArray());
        $content->syncPermissions(['news.view','news.create','news.update','news.delete','settings.view']);
        $faculty->syncPermissions(['faculty.view','faculty.create','faculty.update','faculty.delete']);

        // Assign super-admin to default admin
        $admin = Admin::where('email','admin@example.com')->first();
        if ($admin) {
            $admin->syncRoles(['super-admin']);
        }
    }
}
