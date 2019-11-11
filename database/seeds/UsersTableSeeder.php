<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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

        DB::table('users')->truncate();

        DB::statement("SET foreign_key_checks=1");

        DB::table('users')->insert([
            'name' => 'chmbox_demo',
            'email' => 'chmbox_demo@chmbox.tech',
            'password' => '$2y$10$CkO/iWlIkkVdIrPibNlGveCEFR8CFkLOXbFVN',
            'api_token' => '548451321avav',
        ]);
    }
}
