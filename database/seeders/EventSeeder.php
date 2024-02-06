<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'name' => 'International Conference on Business Management',
                'organizer' => 'Scienceplus',
                'date' => '2024-05-05',
                'capacity' => 150,
            ],
            [
                'name' => 'International Conference on Leadership, Entrepreneurship and Business Management',
                'organizer' => 'Eurasia Web',
                'date' => '2024-07-01',
                'capacity' => 1500,
            ],
            [
                'name' => 'International Conference on Innovative Research Practices',
                'organizer' => 'Isete',
                'date' => '2024-02-01',
                'capacity' => 2050,
            ],
        ];

        foreach ($events as $event) {
            $newEvent = new Event();
            $newEvent->fill($event);
            $newEvent->save();
        }
    }
}
