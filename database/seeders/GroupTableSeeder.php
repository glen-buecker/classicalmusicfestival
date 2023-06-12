<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
            'name' => 'OU',
            'sort_order' => 10,
        ]);
        DB::table('groups')->insert([
            'name' => 'UNLV',
            'sort_order' => 20,
        ]);
        DB::table('groups')->insert([
            'name' => 'McFarlin UMMC',
            'sort_order' => 30,
        ]);
        DB::table('groups')->insert([
            'name' => 'Shenyang Conservatory',
            'sort_order' => 40,
        ]);
        DB::table('groups')->insert([
            'name' => 'Washington State University Concert Choir',
            'sort_order' => 50,
        ]);
        DB::table('groups')->insert([
            'name' => 'Palouse Choral Society',
            'sort_order' => 60,
        ]);
        DB::table('groups')->insert([
            'name' => 'Other (enter affiliation in the Notes/Needs section',
            'sort_order' => 99999,
        ]);
    }
}
