<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResearchTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('research_types')->insert(
            [
                [
                    'name' => 'capstone',
                    'description' => 'CAPSTONE'

                ],
                [
                    'name' => 'software_project',
                    'description' => 'SOFTWARE PROJECT'


                ],
                [
                    'name' => 'thesis',
                    'description' => 'THESIS'

                ]
            ]
        );
    }
}
