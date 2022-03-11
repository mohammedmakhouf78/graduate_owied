<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456')
        ]);

        
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator', // optional
            'description' => 'User is allowed to manage and edit other users', // optional
        ]);

        $editor = Role::create([
            'name' => 'editor',
            'display_name' => 'Editor', // optional
            'description' => 'Editor is allowed to make and edit posts', // optional
        ]);

        $viewer = Role::create([
            'name' => 'viewer',
            'display_name' => 'Viewer', // optional
            'description' => 'viewer is allowed to make a rate to a post', // optional
        ]);

        $createPost = Permission::create([
            'name' => 'create-post',
            'display_name' => 'Create Posts', // optional
            'description' => 'create new product posts', // optional
        ]);

        $editPost = Permission::create([
            'name' => 'edit-post',
            'display_name' => 'Edit Posts', // optional
            'description' => 'edit product posts', // optional
        ]);

        $deletePost = Permission::create([
            'name' => 'delete-post',
            'display_name' => 'Delete Posts', // optional
            'description' => 'delete product posts', // optional
        ]);


        $reviewPost = Permission::create([
            'name' => 'review-post',
            'display_name' => 'Review Posts', // optional
            'description' => 'review product posts', // optional
        ]);

        $admin->attachPermission($createPost);
        $admin->attachPermission($editPost);
        $admin->attachPermission($deletePost);
        $admin->attachPermission($reviewPost);

        $editor->attachPermission($createPost);
        $editor->attachPermission($editPost);
        $editor->attachPermission($deletePost);
        $editor->attachPermission($reviewPost);

        $viewer->attachPermission($reviewPost);



        $user->attachRole($admin);
    }
}
