<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $departemen =[
            ['id'=>'110','nama_departemen'=> 'IT'],
            ['id'=>'111','nama_departemen'=> 'logistics'],
            ['id'=>'112','nama_departemen'=> 'Manajemen'],
        ];
        DB::table('departemen')->insert($departemen);
    }
}
