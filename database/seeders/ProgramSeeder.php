<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('programs')->insert(
            [
                [
                    'level_id' => 1,
                    'name' => 'BSIT',
                    'description' => 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY'

                ],
                [
                    'level_id' => 1,
                    'name' => 'BSIS',
                    'description' => 'BACHELOR OF SCIENCE IN INFORMATION SYSTEM'


                ],
                [
                    'level_id' => 1,
                    'name' => 'BSCS',
                    'description' => 'BACHELOR OF SCIENCE IN COMPUTER SCIENCE'

                ],
                [
                    'level_id' => 2,
                    'name' => 'MSIT',
                    'description' => 'MASTERS IN INFORMATION TECHNOLOGY'

                ],
                [
                    'level_id' => 2,
                    'name' => 'DIT',
                    'description' => 'DOCTOR IN INFORMATION TECHNOLOGY'

                ],
            ]
        );
    }
}
