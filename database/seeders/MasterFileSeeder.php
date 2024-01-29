<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->call(TypeSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(ResearchTypeSeeder::class);
        $this->call(UserResearchRoleSeeder::class);
    }
}
