<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employers')->insert([
            ['Nom'=>'Mitaine', 'Prénom'=>'taine','age'=>5,'code_employer'=>22345],
            ['Nom'=>'Moustache', 'Prénom'=>'Mit','age'=>3, 'code_employer'=>12345],
            ['Nom'=>'stache', 'Prénom'=>'it','age'=>4, 'code_employer'=>16645]
        ]);
    }
}
