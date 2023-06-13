<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $u = new User();
        $u->id = 2;
        $u->name = 'Glen Buecker';
        $u->email = 'gbuecker@icloud.com';
        $u->password = '$2y$10$JmLz3IbdntEfzyEP6APVG.Rw61.1.6wwXRa8oonSBbMh4tkUXccZm';
        $u->created_at = now();
        $u->updated_at = now();
        $u->save();

    }
}
