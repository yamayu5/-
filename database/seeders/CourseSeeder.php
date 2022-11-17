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
            'title' => 'コース名',
            'body' => '30分コース',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
