<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Concession;

class ConcessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concession::create([
            'name'=>'La mine en or',
            'siret'=>'12345678900001',
            'phone'=>'0612345678',
        ]);
    }
}
