<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jobtype;

class JobtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            'Strategist',
            '3D Artist',
            'Art Director',
            'UX/ UI Designer',
            'Media Developer',
            'Front End Developer',
            'Back End Developer',
            'Full Stack Developer',
            
        ];
        foreach($jobs as $job){
            $jobtype = new Jobtype([
                'title' => $job,
            ]);
            $jobtype->save();
        }
    }
}
