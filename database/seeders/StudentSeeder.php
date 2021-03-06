<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710044',
            'name' => 'Luvi Anggraini',
            'class' => 'MI 2E',
            'departement' => 'JTI',
            'phone_number' => '085806259859',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710006',
            'name' => 'Mareta Rosa A',
            'class' => 'MI 2E',
            'departement' => 'JTI',
            'phone_number' => '089601517838',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710141',
            'name' => 'Mohammad zidfi R',
            'class' => 'MI 2E',
            'departement' => 'JTI',
            'phone_number' => '088230034125',
        ]);
    }
}
