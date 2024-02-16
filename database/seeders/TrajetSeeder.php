<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Trajet;


class TrajetSeeder extends Seeder
{
    public function run()
    {
        Trajet::create([
            'start_city' => 'City A',
            'end_city' => 'City B',
            'distance' => 200,
            'duration' => '03:00:00', // Assuming 3 hours duration
        ]);

        Trajet::create([
            'start_city' => 'City C',
            'end_city' => 'City D',
            'distance' => 150,
            'duration' => '02:30:00', // Assuming 2.5 hours duration
        ]);

        // Add more sample data if needed
    }
}
