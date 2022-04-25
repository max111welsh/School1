<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etudiants')->insert([
            ['Nom'=>'Mitaine', 'Prénom'=>'taine','age'=>5,'code_étudiant'=>22345],
            ['Nom'=>'Moustache', 'Prénom'=>'Mit','age'=>3, 'code_étudiant'=>12345],
            ['Nom'=>'stache', 'Prénom'=>'it','age'=>4, 'code_étudiant'=>16645]
        ]);
    }
}
