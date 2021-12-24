<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'setting_id' => 1,
                'site_title' => 'IBCS Ecommerce',
                'site_description' => 'IBCS Ecommerce',
                'site_logo' => 'setting_eplus.png',
                'site_icon' => 'setting_e.png',
                'site_address' => 'Dhaka',
                'site_phone' => '01832967276',
                'site_email' => 'admin@gmail.com',
                'site_fax' => '1111123213232',
            ),
        ));
        
        
    }
}