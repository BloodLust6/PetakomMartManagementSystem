<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Announcement::create([
            'title' => 'Important Announcement',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ]);

        Announcement::create([
            'title' => 'Upcoming Event',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ]);
    }
}
