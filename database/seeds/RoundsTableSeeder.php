<?php

use Illuminate\Database\Seeder;

class RoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rounds')->insert(
        	[
        		"name" => 'Preliminary',
        		"level" => '1',
        	]
        );

        DB::table('rounds')->insert(
        	[
        		"name" => 'Finals',
        		"level" => '2',
        	]
        );
    }
}
