<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role1 =  Role::create(['name'=>'Admin']);
      $role2 =  Role::create(['name'=>'Blogger']);

      Permission::create([
        'name' => 'admin.home',
        'description' => 'Ver el dashboard'
      ])->syncRoles([$role1,$role2]);
      Permission::create([
        'name' => 'admin.users.index',
        'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
      Permission::create([
        'name' => 'admin.users.edit',
        'description' => 'Asignar usuario'])->syncRoles([$role1]);
      
      //TESTIMONIALS
      Permission::create([
        'name' => 'admin.testimonials.index',
        'description' => 'Ver listado de Testimonios'])->syncRoles([$role1,$role2]);
      Permission::create([
        'name' => 'admin.testimonials.create',
        'description' => 'Crear Testimonio'])->syncRoles([$role1,$role2]);
      Permission::create([
        'name' => 'admin.testimonials.edit',
        'description' => 'Editar Testimonio'])->syncRoles([$role1,$role2]);
      Permission::create([
        'name' => 'admin.testimonials.destroy',
        'description' => 'Eliminar Testimonio'])->syncRoles([$role1,$role2]);
      
      //POSTS
      Permission::create([
        'name' => 'admin.posts.index',
        'description' => 'Ver listado de Post'])->syncRoles([$role1,$role2]);
      Permission::create([
        'name' => 'admin.posts.create',
        'description' => 'Crear Post'])->syncRoles([$role1,$role2]);
      Permission::create([
        'name' => 'admin.posts.edit',
        'description' => 'Editar Post'])->syncRoles([$role1,$role2]);
      Permission::create([
        'name' => 'admin.posts.destroy',
        'description' => 'Eliminar Post'])->syncRoles([$role1,$role2]);

    }
}
