<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\Course;
use Illuminate\Support\Facades\DB;
use DateTime;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => '30分コース',
            'body' => '30分の施術をする',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('courses')->insert([
            'title' => '60分コース',
            'body' => '60分の施術をする',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('courses')->insert([
            'title' => '90分コース',
            'body' => '90分の施術をする',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
