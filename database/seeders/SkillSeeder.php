<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insertGetId([
            'skill' => 'PHP'
        ]);

        DB::table('skills')->insertGetId([
            'skill' => 'Laravel'
        ]);

        DB::table('skills')->insertGetId([
            'skill' => 'JavaScript'
        ]);

        DB::table('skills')->insertGetId([
            'skill' => 'Java'
        ]);

        DB::table('skills')->insertGetId([
            'skill' => 'Kotlin'
        ]);

        DB::table('skills')->insertGetId([
            'skill' => 'CSS'
        ]);

        DB::table('skills')->insertGetId([
            'skill' => 'NodeJS'
        ]);

        DB::table('skills')->insertGetId([
            'skill' => 'Bootstrap'
        ]);

        DB::table('skills')->insertGetId([
            'skill' => 'Angular'
        ]);
    }
}
