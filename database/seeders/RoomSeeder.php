<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $a = new Room;

        $a->hotel_id = 1; // Haus der Begegnung
        $a->room = 'Double room occupancy without air conditioning';
        $a->cost = 0.00;
        $a->sort_order = 10;
        $a->created_at = now()->timestamp;
        $a->save();

        //
        $a = new Room;

        $a->hotel_id = 2; // Step-Gästehaus
        $a->room = 'Single room without air conditioning';
        $a->cost = 0.00;
        $a->sort_order = 20;
        $a->created_at = now()->timestamp;
        $a->save();

        //
        $a = new Room;

        $a->hotel_id = 2; // Step-Gästehaus
        $a->room = 'Double room without air conditioning';
        $a->cost = 0.00;
        $a->sort_order = 22;
        $a->created_at = now()->timestamp;
        $a->save();

        //
        $a = new Room;

        $a->hotel_id = 3; // Weinhaus Wagner
        $a->room = 'Double room without air condition';
        $a->cost = 0.00;
        $a->sort_order = 30;
        $a->created_at = now()->timestamp;
        $a->save();

        //
        $a = new Room;

        $a->hotel_id = 3; // Weinhaus Wagner
        $a->room = 'Double room with air conditioning (per person rate)';
        $a->cost = 95.00;
        $a->sort_order = 31;
        $a->created_at = now()->timestamp;
        $a->save();

        //
        $a = new Room;

        $a->hotel_id = 3; // Weinhaus Wagner
        $a->room = 'Double room suite with air conditioning (per person rate)';
        $a->cost = 175.00;
        $a->sort_order = 32;
        $a->created_at = now()->timestamp;
        $a->save();

        //
        $a = new Room;

        $a->hotel_id = 3; // Weinhaus Wagner
        $a->room = 'Double room deluxe suite with air conditioning (per person rate)';
        $a->cost = 250.00;
        $a->sort_order = 33;
        $a->created_at = now()->timestamp;
        $a->save();

        //
        $a = new Room;

        $a->hotel_id = 4; // Hotel Ohr
        $a->room = 'Single room without air conditioning (per person rate)';
        $a->cost = 245.00;
        $a->sort_order = 40;
        $a->created_at = now()->timestamp;
        $a->save();

        //
        $a = new Room;

        $a->hotel_id = 4; // Hotel Ohr
        $a->room = 'Standard double room with air conditioning (per person rate)';
        $a->cost = 195.00;
        $a->sort_order = 41;
        $a->created_at = now()->timestamp;
        $a->save();

        //
        $a = new Room;

        $a->hotel_id = 4; // Hotel Ohr
        $a->room = 'Standard single room without air conditioning (per person rate)';
        $a->cost = 295.00;
        $a->sort_order = 42;
        $a->created_at = now()->timestamp;
        $a->save();

        //
        $a = new Room;

        $a->hotel_id = 4; // Hotel Ohr
        $a->room = 'Deluxe double room with air conditioning (per person rate)';
        $a->cost = 350.00;
        $a->sort_order = 43;
        $a->created_at = now()->timestamp;
        $a->save();

//        //
//        $a = new Room;
//
//        $a->hotel_id = 6; // Hotel Galantha
//        $a->room = '';
//        $a->cost = ;
//        $a->sort_order = 50;
//        $a->created_at = now()->timestamp;
//        $a->save();


    }
}
