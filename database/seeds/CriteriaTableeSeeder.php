<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaTableeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criteria')->insert(
        	[
            'name' => "(1) Casual Wear",
            'description' => "aa",
            'highest' => '10',
            'lowest' => '4',
            'round_id' => '1'
        	]
        );

        DB::table('criteria')->insert(
        	[
            'name' => "(2) Creative Head Dress",
            'description' => "aa",
            'highest' => '10',
            'lowest' => '4',
            'round_id' => '1'
        	]
        );

        DB::table('criteria')->insert(
        	[
            'name' => "(3) Physique/Body Porportion",
            'description' => "aa",
            'highest' => '15',
            'lowest' => '7',
            'round_id' => '1'
        	]
        );

        DB::table('criteria')->insert(
        	[
            'name' => "(3) Swim Wear",
            'description' => "aa",
            'highest' => '10',
            'lowest' => '4',
            'round_id' => '1'
        	]
        );

        DB::table('criteria')->insert(
        	[
            'name' => "(4) Facial Beauty Looks",
            'description' => "aa",
            'highest' => '25',
            'lowest' => '10',
            'round_id' => '1'
        	]
        );

        DB::table('criteria')->insert(
        	[
            'name' => "(4) Formal Wear",
            'description' => "aa",
            'highest' => '10',
            'lowest' => '4',
            'round_id' => '1'
        	]
        );

    }
}
