<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
        $this->call(\Database\Seeders\PermissionsTableSeeder::class);
        $this->call(\Database\Seeders\ProductsTableSeeder::class);
        $this->call(\Database\Seeders\RolesTableSeeder::class);
        $this->call(\Database\Seeders\RoleHasPermissionsTableSeeder::class);
        $this->call(\Database\Seeders\SettingsTableSeeder::class);
        $this->call(\Database\Seeders\UsersTableSeeder::class);
        $this->call(\Database\Seeders\UserHasRolesTableSeeder::class);
    }
}
