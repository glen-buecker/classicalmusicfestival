<?php

namespace Database\Seeders;

use App\Models\Part;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $part = new Part;
        $part->area_id = 1;
        $part->name = 'Observer';
        $part->sort_order_within_area = 10; //within family
        $part->created_at = now()->timestamp;
        $part->save();
//
        $part = new Part;
        $part->area_id = 1;
        $part->name = 'Faculty/Staff';
        $part->sort_order_within_area = 20; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        // Chorus
        $part = new Part;
        $part->area_id = 2;
        $part->name = 'Soprano';
        $part->sort_order_within_area = 10; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        //
        $part = new Part;

        $part->area_id = 2;
        $part->name = 'Alto';
        $part->sort_order_within_area = 20; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        //
        $part = new Part;

        $part->area_id = 2;
        $part->name = 'Tenor';
        $part->sort_order_within_area = 30; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        //
        $part = new Part;

        $part->area_id = 2;
        $part->name = 'Bass';
        $part->sort_order_within_area = 40; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        // Orchestra
        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Piccolo';
        $part->sort_order_within_area = 10; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Flute';
        $part->sort_order_within_area = 11; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Oboe';
        $part->sort_order_within_area = 12; //within family
        $part->created_at = now()->timestamp;
        $part->save();


        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Clarinet';
        $part->sort_order_within_area = 13; //within family
        $part->created_at = now()->timestamp;
        $part->save();


        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Bassoon';
        $part->sort_order_within_area = 14; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Contrabassoon';
        $part->sort_order_within_area = 15; //within family
        $part->created_at = now()->timestamp;
        $part->save();


        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Trumpet';
        $part->sort_order_within_area = 20; //within family
        $part->created_at = now()->timestamp;
        $part->save();


        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Horn';
        $part->sort_order_within_area = 21; //within family
        $part->created_at = now()->timestamp;
        $part->save();


        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Alto Trombone';
        $part->sort_order_within_area = 22; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Tenor Trombone';
        $part->sort_order_within_area = 23; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Bass Trombone';
        $part->sort_order_within_area = 24; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Percussion';
        $part->sort_order_within_area = 30; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Violin';
        $part->sort_order_within_area = 30; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Viola';
        $part->sort_order_within_area = 31; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Cello';
        $part->sort_order_within_area = 32; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 3;
        $part->name = 'Double Bass';
        $part->sort_order_within_area = 33; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 4;
        $part->name = 'Performer';
        $part->sort_order_within_area = 40; //within family
        $part->created_at = now()->timestamp;
        $part->save();

        $part = new Part;

        $part->area_id = 4;
        $part->name = 'Teacher';
        $part->sort_order_within_area = 41; //within family
        $part->created_at = now()->timestamp;
        $part->save();



    }
}
