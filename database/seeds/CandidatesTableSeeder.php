<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "KC Lyn",
            'middlename' => "",
            'lastname' => 'Mallari',
            'gender' => 'Female',
            'year' => '1',
            'department' => 'College Of Engineering',
            'candidate_no' => '1',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Katherine",
            'middlename' => "",
            'lastname' => 'Lacson',
            'gender' => 'Female',
            'year' => '2',
            'department' => 'College of Arts, Social Sciences and Education',
            'candidate_no' => '2',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Shiela Mae ",
            'middlename' => "",
            'lastname' => 'Miclat',
            'gender' => 'Female',
            'year' => '2',
            'department' => 'College of Business',
            'candidate_no' => '3',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Misty",
            'middlename' => "",
            'lastname' => 'Panganiban',
            'gender' => 'Female',
            'year' => '2',
            'department' => 'Senior High School Main',
            'candidate_no' => '4',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Princess ",
            'middlename' => "",
            'lastname' => 'Escoto',
            'gender' => 'Female',
            'year' => '2',
            'department' => 'SPCF Miranda',
            'candidate_no' => '5',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Nicole",
            'middlename' => "aa",
            'lastname' => 'Melecio ',
            'gender' => 'Female',
            'year' => 'Female',
            'department' => 'Senior High School Miranda',
            'candidate_no' => '6',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Alleth",
            'middlename' => "",
            'lastname' => 'Franco',
            'gender' => 'Female',
            'year' => 'Female',
            'department' => 'College of Business',
            'candidate_no' => '7',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Deserie",
            'middlename' => "",
            'lastname' => 'Balajadia',
            'gender' => 'Female',
            'year' => '2',
            'department' => 'Senior High School Main',
            'candidate_no' => '8',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Brazmeena",
            'middlename' => "aa",
            'lastname' => 'Abduraja',
            'gender' => 'Female',
            'year' => '2',
            'department' => 'College of Hospitality Management',
            'candidate_no' => '9',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Irene ",
            'middlename' => "",
            'lastname' => 'Mercado',
            'gender' => 'Female',
            'year' => '2',
            'department' => 'College of Hospitality Management',
            'candidate_no' => '10',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Rose Anne",
            'middlename' => "aa",
            'lastname' => 'Mallari',
            'gender' => 'Female',
            'year' => '2',
            'department' => 'College of Hospitality Management ',
            'candidate_no' => '11',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Marie Rose",
            'middlename' => "",
            'lastname' => 'Gaza',
            'gender' => 'Female',
            'year' => '2',
            'department' => 'College of Hospitality Management ',
            'candidate_no' => '12',
        	]
        );

        /******************** BOYS *****************/ 
        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Lawrence James",
            'middlename' => "",
            'lastname' => 'Vita',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'College of Computing and Information Sciences',
            'candidate_no' => '13',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Raymond Lance",
            'middlename' => "",
            'lastname' => 'Aguilar',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'Senior High School Main',
            'candidate_no' => '14',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Vince Paul",
            'middlename' => "",
            'lastname' => 'Tumaliuan',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'College of Business',
            'candidate_no' => '15',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Jimwell",
            'middlename' => "",
            'lastname' => 'Espino',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'Senior High School Miranda',
            'candidate_no' => '16',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Steven Claude",
            'middlename' => "",
            'lastname' => 'Nacpil',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'SPCF Miranda',
            'candidate_no' => '17',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Lemuel",
            'middlename' => "",
            'lastname' => 'Ayson',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'College of Computing and Information Sciences',
            'candidate_no' => '18',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Jefferson",
            'middlename' => "",
            'lastname' => 'Simbulan',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'College of Computing and Information Sciences',
            'candidate_no' => '19',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Justin Hernandez",
            'middlename' => "",
            'lastname' => 'Gaza',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'College of Arts, Social Sciences and Education',
            'candidate_no' => '20',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Jayvie Sunga",
            'middlename' => "",
            'lastname' => 'Gaza',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'College of Engineering',
            'candidate_no' => '21',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Joshua",
            'middlename' => "",
            'lastname' => 'Padriga',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'Senior High School Main',
            'candidate_no' => '22',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Iran Karl",
            'middlename' => "",
            'lastname' => 'Cayanan',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'College of Criminology',
            'candidate_no' => '23',
        	]
        );

        DB::table('candidates')
        ->insert(
        	[
            'firstname' => "Christian",
            'middlename' => "",
            'lastname' => 'Cordero',
            'gender' => 'Male',
            'year' => '2',
            'department' => 'College of Busniess',
            'candidate_no' => '24',
        	]
        );
    }
}
