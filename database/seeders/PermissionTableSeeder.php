<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'club-manager-list',
           'club-manager-create',
           'club-manager-edit',
           'club-manager-delete',
           'member-list',
           'member-create',
           'member-edit',
           'member-delete',
           'playground-manager-list',
           'playground-manager-create',
           'playground-manager-edit',
           'playground-manager-delete',
           'stadium-manager-list',
           'stadium-manager-create',
           'stadium-manager-edit',
           'stadium-manager-delete',
           'payments',
           'make-payment',
           'playground-status'

           
        ];
      
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}