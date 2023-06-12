<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Area();
        $a->name = 'Other';
        $a->sort_order = 10;
        $a->created_at = now()->timestamp;
        $a->save();

        $a = new Area();
        $a->name = 'Chorus';
        $a->sort_order = 20;
        $a->created_at = now()->timestamp;
        $a->save();

        $a = new Area();
        $a->name = 'Orchestra';
        $a->sort_order = 30;
        $a->created_at = now()->timestamp;
        $a->save();

        $a = new Area();
        $a->name = 'Piano Seminar';
        $a->sort_order = 40;
        $a->active = false;
        $a->created_at = now()->timestamp;
        $a->save();

    }
}
