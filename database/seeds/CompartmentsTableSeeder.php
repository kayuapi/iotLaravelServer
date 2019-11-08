<?php

use Illuminate\Database\Seeder;

class CompartmentsTableSeeder extends Seeder
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

        DB::table('compartments')->truncate();

        DB::statement("SET foreign_key_checks=1");


        DB::table('compartments')->insert([
            'passcode' => Str::random(6),
            'emptied' => 0,
            'item_id' => 1,
        ]);

        DB::table('compartments')->insert([
            'passcode' => Str::random(6),
            'emptied' => 0,
            'item_id' => 2,
        ]);

        DB::table('compartments')->insert([
            'passcode' => Str::random(6),
            'emptied' => 0,
            'item_id' => 2,
        ]);

        DB::table('compartments')->insert([
            'passcode' => Str::random(6),
            'emptied' => 0,
            'item_id' => 3,
        ]);

        DB::table('compartments')->insert([
            'passcode' => Str::random(6),
            'emptied' => 1,
            'item_id' => 1,
        ]);
    }
}
