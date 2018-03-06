<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CandidatesTableSeeder::class);
        $this->call(CriteriaTableeSeeder::class);
        $this->call(JudgesTableSeeder::class);
        $this->call(RoundsTableSeeder::class);
    }
}
