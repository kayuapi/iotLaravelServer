<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::statement("SET foreign_key_checks=0");

        DB::table('items')->truncate();

        DB::statement("SET foreign_key_checks=1");

        DB::table('items')->insert([
            'name' => 'xbox',
            'icon' => 'fab fa-xbox',
        ]);

        DB::table('items')->insert([
            'name' => 'oculus rift',
            'icon' => 'fas fa-vr-cardboard',
        ]);

        DB::table('items')->insert([
            'name' => 'laptop',
            'icon' => 'fas fa-laptop',
        ]);

        DB::table('items')->insert([
            'name' => 'playstation',
            'icon' => 'fab fa-gamepad',
        ]);

        DB::table('items')->insert([
            'name' => 'drone',
            'icon' => 'fas fa-helicopter',
        ]);

        DB::table('items')->insert([
            'name' => 'puzzle',
            'icon' => 'fas fa-puzzle-piece',
        ]);

    }
}
