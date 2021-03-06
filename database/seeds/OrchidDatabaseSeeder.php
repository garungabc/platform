<?php

namespace Orchid\Database\Seeds;

use Illuminate\Database\Seeder;

class OrchidDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * php artisan db:seed --class="Orchid\Database\Seeds\OrchidDatabaseSeeder"
     *
     * run another class
     * php artisan db:seed --class="Orchid\Database\Seeds\UsersTableSeeder"
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //AttachmentsTableSeeder::class,
            //UsersTableSeeder::class,
            //RolesTableSeeder::class,
            //SettingsTableSeeder::class,
            //TermsTableSeeder::class,
            //MenusTableSeeder::class,
            //PagesTableSeeder::class,
            //PostsTableSeeder::class,
        ]);
    }
}
