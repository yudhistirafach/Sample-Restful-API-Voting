<?php

namespace Database\Seeders;

use App\Models\VotingEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VotingEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $votingEvents = [                     [
            "title" => "Top Employee Maret 2025",
            "description" => "Choose top employee in Maret 2025",
            "date_start" => "2025-03-01",
            "date_end" => "2025-03-31",
        ],
        [
            "title" => "Top Perform Last Week Maret 2025",
            "description" => "Choose top perform employee in last week of Maret 2025",
            "date_start" => "2025-03-01",
            "date_end" => "2025-03-31",
        ],
        [
            "title" => "Best Head Team Maret 2025",
            "description" => "Choose top head of team in Maret 2025",
            "date_start" => "2025-03-01",
            "date_end" => "2025-03-31",
        ]];

        foreach($votingEvents as $event) {
            VotingEvent::create($event);
        }
    }
}
