<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiences = [
            [
                'job_title'=>'Angular Developer',
                'start_date'=>Carbon::parse('2021-03-03'),
                'end_date'=>Carbon::now(),
                'job_description'=>'Developing user interfaces using angular vest practices. Create unit tests to ensure code is functioning as expected',
                'company_name'=>'Tekoway',
                'personal_data_id'=>'1',
            ],
            [
                'job_title'=>'Full Stack Developer',
                'start_date'=>Carbon::parse('2021-09-03'),
                'end_date'=>Carbon::parse('2022-01-03'),
                'job_description'=>'Making complex technical and design decisions for Master Degree project.',
                'company_name'=>'Personal Project',
                'personal_data_id'=>'1',
            ],
        ];

        DB::table('experiences')->insert($experiences);
    }
}
