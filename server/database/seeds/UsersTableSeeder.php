<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'user_id' => 21,
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RtIUJpvoOxb.OoLEZmDx/ein6ABacM1LTGEXp.00KsBi.BaWDUloa',
                'remember_token' => NULL,
                'created_at' => '2021-12-20 13:56:55',
                'updated_at' => '2021-12-24 06:02:05',
            ),
            1 => 
            array (
                'user_id' => 23,
                'name' => 'Jisan Ahmed',
                'email' => 'jisanahmed06@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8c3LVdfA8fvEKeK1E2QHI.ihWJIgzrxvXJMRKoCrwEj.4XJxrYF4y',
                'remember_token' => NULL,
                'created_at' => '2021-12-23 15:25:02',
                'updated_at' => '2021-12-23 15:25:02',
            ),
        ));
        
        
    }
}