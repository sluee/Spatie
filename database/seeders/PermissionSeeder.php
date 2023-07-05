<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Administrator',
            'email' =>'admin@gmail.com',
            'password' =>bcrypt('password123')
        ]);

        $admin  = Role::create(['name' => 'admin']);

        $createUserPermission = Permission::create(['name' => 'create-user']);
        $createItem = Permission::create(['name' => 'create-item']);
        $editItem = Permission::create(['name' => 'edit-item']);
        $viewItem = Permission::create(['name' => 'view-item' ]);
        $deleteItem = Permission::create(['name' => 'delete-item' ]);
        $listItem = Permission::create(['name' => 'list-item']);

        $admin->givePermissionTo('create-user');
        $admin->givePermissionTo('create-item');
        $admin->givePermissionTo('edit-item');
        $admin->givePermissionTo('view-item');
        $admin->givePermissionTo('delete-item');
        $admin->givePermissionTo('list-item');

        $editor = Role::create(['name' => 'editor' ]);
        $editor->givePermissionTo('create-item');
        $editor->givePermissionTo('edit-item');
        $editor->givePermissionTo('view-item');
        $editor->givePermissionTo('list-item');



    }
}
