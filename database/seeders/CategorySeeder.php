<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert(
            [
                [
                    'type_id' => 1,
                    'name' => 'under_graduate',
                    'description' => 'UNDER GRADUATE'

                ],
                [
                    'type_id' => 1,
                    'name' => 'graduate_school',
                    'description' => 'GRADUATE SCHOOL'

                ],
                [
                    'type_id' => 2,
                    'name' => 'faculty',
                    'description' => 'FACULTY'

                ],
                [
                    'type_id' => 2,
                    'name' => 'admin',
                    'description' => 'ADMIN'

                ],
            ]
        );
    }
}
