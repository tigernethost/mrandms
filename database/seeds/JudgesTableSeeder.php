<?php

use Illuminate\Database\Seeder;

class JudgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge1",
            'description' => "aa",
            'judgeno' => '1',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge2",
            'description' => "aa",
            'judgeno' => '2',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge3",
            'description' => "aa",
            'judgeno' => '3',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge4",
            'description' => "aa",
            'judgeno' => '4',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge5",
            'description' => "aa",
            'judgeno' => '5',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge6",
            'description' => "aa",
            'judgeno' => '6',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge7",
            'description' => "aa",
            'judgeno' => '7',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge8",
            'description' => "aa",
            'judgeno' => '8',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge9",
            'description' => "aa",
            'judgeno' => '9',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge10",
            'description' => "aa",
            'judgeno' => '10',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge11",
            'description' => "aa",
            'judgeno' => '11',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge12",
            'description' => "aa",
            'judgeno' => '12',
        	]
        );

        DB::table('judges')->insert(
        	[
            'fullname' => "Judge13",
            'description' => "aa",
            'judgeno' => '13',
        	]
        );
    }
}
