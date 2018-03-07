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
            'highest' => '15',
            'lowest' => '7',
            'round_id' => '1'
        	]
        );

        DB::table('criteria')->insert(
        	[
            'name' => "(2) Creative Head Dress",
            'description' => "aa",
            'highest' => '15',
            'lowest' => '7',
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
            'highest' => '15',
            'lowest' => '7',
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
            'highest' => '15',
            'lowest' => '7',
            'round_id' => '1'
        	]
        );

        DB::table('criteria')->insert(
            [
            'name' => "Intelligence",
            'description' => "aa",
            'highest' => '50',
            'lowest' => '20',
            'round_id' => '2'
            ]
        );

        DB::table('criteria')->insert(
            [
            'name' => "Over All Impression",
            'description' => "aa",
            'highest' => '50',
            'lowest' => '20',
            'round_id' => '2'
            ]
        );
    }
}
