<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\promotion;

class promotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promotion::create([
            'title' => 'test',
            'description' => 'fsafasf',
            'time_start' => '08/06/2023',
            'time_end' =>'10/06/2023'
        ]);
        Promotion::create([
            'title' => 'test2',
            'description' => 'fsdf',
            'time_start' => '08/06/2023',
            'time_end' =>'10/06/2023'
        ]);
        
    }
}
