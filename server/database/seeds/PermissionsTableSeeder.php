<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'role-list',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:51',
                'updated_at' => '2021-12-20 13:56:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'role-create',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:52',
                'updated_at' => '2021-12-20 13:56:52',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'role-edit',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:52',
                'updated_at' => '2021-12-20 13:56:52',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'role-delete',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:52',
                'updated_at' => '2021-12-20 13:56:52',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'product-list',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:52',
                'updated_at' => '2021-12-20 13:56:52',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'product-create',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:52',
                'updated_at' => '2021-12-20 13:56:52',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'product-edit',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:52',
                'updated_at' => '2021-12-20 13:56:52',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'product-delete',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:52',
                'updated_at' => '2021-12-20 13:56:52',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'order-list',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:52',
                'updated_at' => '2021-12-20 13:56:52',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'order-create',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:52',
                'updated_at' => '2021-12-20 13:56:52',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'order-edit',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:53',
                'updated_at' => '2021-12-20 13:56:53',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'order-delete',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:53',
                'updated_at' => '2021-12-20 13:56:53',
            ),
            12 => 
            array (
                'id' => 17,
                'name' => 'see-dashboard',
                'guard_name' => 'web',
                'created_at' => '2021-12-20 13:56:53',
                'updated_at' => '2021-12-20 13:56:53',
            ),
        ));
        
        
    }
}