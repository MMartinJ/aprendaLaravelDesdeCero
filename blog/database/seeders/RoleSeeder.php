<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Roles
        $role_admin = Role::create(['name' => 'Admin']);
        $role_blogger = Role::create(['name' => 'Blogger']);


        //Permisos
        Permission::create(['name' => 'admin.home', 'description' => 'Ver el dashboard'])->syncRoles([$role_admin, $role_blogger]);

        //permisos menu usuarios
        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver los usuarios'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Editar los usuarios'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.users.update', 'description' => 'Actualizar los usuarios'])->syncRoles([$role_admin]);

        //permisos menu categorias
        Permission::create(['name' => 'admin.categories.index', 'description' => 'Ver categorias'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.categories.create', 'description' => 'Crear categorias'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'Editar categorias'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Eliminar categorias'])->syncRoles([$role_admin]);

        //permisos menu etiquetas
        Permission::create(['name' => 'admin.tags.index', 'description' => 'Ver etiquetas'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Crear etiquetas'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Editar etiquetas'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Eliminar etiquetas'])->syncRoles([$role_admin]);

        //permisos menu posts
        Permission::create(['name' => 'admin.posts.index', 'description' => 'Ver posts'])->syncRoles([$role_admin, $role_blogger]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear post'])->syncRoles([$role_admin, $role_blogger]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Editar posts'])->syncRoles([$role_admin, $role_blogger]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Eliminar post'])->syncRoles([$role_admin, $role_blogger]);

        


    }
}
