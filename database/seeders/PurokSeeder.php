<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// use puroks
use App\Models\Purok;
// use Hash
use Illuminate\Support\Facades\Hash;

class PurokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $puroks = [
            "1", 
            "1a",
            "2a",
            "2b",
            "2c",
            "3",
            "3a",
            "3b",
            "4",
            "4a",
            "4b",
            "4c",
            "5",
            "6",
            "7",
            "8",
            "8a",
            "9",
            "10",
            "11",
            "12",
        ];
        
        // purok seeder
        for ($i=0; $i < count($puroks); $i++) { 
            Purok::create([
                'purok' => $puroks[$i],
            ]);
        }
    }
}
