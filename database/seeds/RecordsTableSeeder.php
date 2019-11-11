<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
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

        DB::table('records')->truncate();

        DB::statement("SET foreign_key_checks=1");
    }
}
