<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            ['skill_title'=>'TypeScript', 'personal_data_id'=>'1'],
            ['skill_title'=>'JavaScript', 'personal_data_id'=>'1'],
            ['skill_title'=>'HTML', 'personal_data_id'=>'1'],
            ['skill_title'=>'SCSS', 'personal_data_id'=>'1'],
            ['skill_title'=>'Angular', 'personal_data_id'=>'1'],
            ['skill_title'=>'Angular Material', 'personal_data_id'=>'1'],
            ['skill_title'=>'RxJS', 'personal_data_id'=>'1'],
            ['skill_title'=>'Cypress.io', 'personal_data_id'=>'1'],
            ['skill_title'=>'React', 'personal_data_id'=>'1'],
            ['skill_title'=>'Laravel', 'personal_data_id'=>'1'],
            ['skill_title'=>'Symfony', 'personal_data_id'=>'1'],
        ];

        DB::table('skills')->insert($skills);
    }
}
