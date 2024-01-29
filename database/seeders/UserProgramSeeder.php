<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('user_programs')->insert(
            [
                [
                    'user_id' => 1,
                    'program_id' => 1,

                ],
                [
                    'user_id' => 1,
                    'program_id' => 2,

                ],
                [
                    'user_id' => 1,
                    'program_id' => 3,

                ],
                [
                    'user_id' => 1,
                    'program_id' => 4,

                ],
                [
                    'user_id' => 1,
                    'program_id' => 5,

                ],
            ]
        );
    }
}
