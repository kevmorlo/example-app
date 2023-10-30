<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mine;

class MineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mine::create([
            'name'=>'La mine saint aubinoise',
            'latitude'=>'48.266367359849',
            'longitude'=>'-1.618651597329',
            'concession_id'=>'1',
        ]);
    }
}
