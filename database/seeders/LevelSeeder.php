<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('levels')->insert(
            [
                [
                    'name' => 'under_graduate',
                    'description' => 'UNDER GRADUATE'

                ],
                [
                    'name' => 'graduate_school',
                    'description' => 'GRADUATE SCHOOL'

                ]
            ]
        );
    }
}
