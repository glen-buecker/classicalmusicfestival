<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $h = new Hotel;
        $h->name = 'Haus der Begegnung';
        $h->description = '<p>Haus der Begegnung, a former monastery, features spacious double and triple rooms with private baths. Marble hallways, extended ceilings and distant views across the fields to the Hungarian border make this a delightfully satisfying place to live. It is located next to the Bergkirche and a short walking distance to both the Esterházy Palace and Haydn Konservatorium. Each room includes private bath, small refrigerator, internet access, hair dryer, room phone and radio. Elevator access. Double and triple rooms available. Daily buffet breakfast included.</p>';
        $h->sort_order = 10;
        $h->created_at = now()->timestamp;
        $h->save();

        //
        $h = new Hotel;
        $h->name = 'Step-Gästehaus';
        $h->description = '<p>This renovated gästehaus is located a couple of blocks from the Kulturzentrum, within easy walking distance to the pedestrian zone (Hauptstrasse) near the center of downtown. The gästehaus offers single and double room housing that includes private bath, linen service, and free wifi in each room and throughout the house. Each floor has a kitchen with refrigerator available and pantry . Daily breakfast buffet included with eggs, sausage/meat, rolls/bread, cheese, yogurt, cereals, jam, honey, butter, fruit, hot and cold beverages, . Rehearsal rooms available for musicians wanting to practice. Nearby shopping and restaurants are in convenient walking distance.</p>';
        $h->sort_order = 20;
        $h->created_at = now()->timestamp;
        $h->save();

        //
        $h = new Hotel;
        $h->name = 'Weinhaus Wagner';
        $h->description = '<p>Weinhaus Wagner is a delightful small guesthouse located in the Oberberg across from the Bergkirche with a wine cellar dating back to before the time of Haydn. Eight lovely guestrooms designed for double occupancy are named after the wines of the region. The quaint breakfast room and living area provide pleasant places to visit with friends. All rooms include private bath, TV, hair dryer, and internet. Rooms are on the second and third floors, accessible by stairs; no elevator. The hotel is a block from the Bergkirche and short walk to the Esterházy Palace and Haydn Konservatorium. Daily breakfast included.</p><p>Upgrade cost: No additional cost for rooms without air-conditioning (Weissburgunder Room and Zweigelt Room); $95 per person for rooms with a/c (Blaufrankisch Room, Grüner Veltliner Room, Traminer Room, Rose Room); $125 per person for the Einklang Natur Suite (with a/c) which features 1-1/2 baths, sitting area and sleeping area. The spacious Gewürtztraminer Suite includes a/c, can sleep up to 3 people, has a living area and balcony overlooking a lovely garden area. Additional cost for the suite is $250 per person for 2 people.</p>';
        $h->sort_order = 30;
        $h->created_at = now()->timestamp;
        $h->save();

        //
        $h = new Hotel;
        $h->name = 'Hotel Ohr';
        $h->description = '<p>This excellent family-run four-star hotel also has a charming outdoor garden for dining and one of the best restaurants in Northern Burgenland. Gasthof Ohr offers both double and single rooms which include private bath, air conditioning, free internet, hair dryer, color TV, and phone. Some rooms will accommodate up to three people with a chair bed.  Rooms are on the second and third floors and accessible by elevator or stairs. Daily buffet breakfast included.</p><p>Upgrade cost is added to the basic fee depending on your enrollment category and room. Upgrade cost for singers and observers: $325 per person for standard double room with air conditioning. Cost for single room housing with a/c is $295.</p>';
        $h->sort_order = 40;
        $h->created_at = now()->timestamp;
        $h->save();

        //
        $h = new Hotel;
        $h->name = 'Hotel Galantha (opened September 2022)';
        $h->description = '<p>Located in Eisenstadt, a few steps from Esterházy Palace, Hotel Galántha provides accommodations with a restaurant, private parking, a fitness center and bar, spa center and sauna. Featuring family rooms, this property also provides guests with a terrace. The property has a 24-hour front desk, room service and currency exchange for guests.The hotel will provide guests with air-conditioned rooms offering a desk, an electric tea pot, a minibar, a safety deposit box, a flat-screen TV and a private bathroom with a bath or shower. At Hotel Galántha each room has bed linen and towels. Guests at the accommodation can enjoy a buffet breakfast. Pricing and number of rooms is still being confirmed for the festival so if you are interested in this hotel, please contact cathy@cmfadmin.com. You can expect the upgrade cost to be at least $350-$400 per person for the 10 days with double occupancy.</p>';
        $h->sort_order = 50;
        $h->created_at = now()->timestamp;
        $h->save();
    }
}
