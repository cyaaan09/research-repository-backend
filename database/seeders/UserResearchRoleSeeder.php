<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserResearchRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('user_research_roles')->insert(
            [
                [
                    'name' => 'panel',
                    'description' => 'PANEL'

                ],
                [
                    'name' => 'author',
                    'description' => 'AUTHOR'


                ],
                [
                    'name' => 'adviser',
                    'description' => 'ADVISER'

                ]
            ]
        );
    }
}
