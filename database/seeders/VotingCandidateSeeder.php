<?php

namespace Database\Seeders;

use App\Models\VotingCandidate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VotingCandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $candidates = [
            [
                "employeeId" => "3",
                "votingEventId" => "1",
            ],
            [
                "employeeId" => "1",
                "votingEventId" => "1",
            ],
            [
                "employeeId" => "2",
                "votingEventId" => "1",
            ],
            [
                "employeeId" => "6",
                "votingEventId" => "2",
            ],
            [
                "employeeId" => "4",
                "votingEventId" => "2",
            ],
            [
                "employeeId" => "5",
                "votingEventId" => "2",
            ],
            [
                "employeeId" => "7",
                "votingEventId" => "3",
            ],
            [
                "employeeId" => "8",
                "votingEventId" => "3",
            ],
            [
                "employeeId" => "10",
                "votingEventId" => "3",
            ],
        ];

        foreach($candidates as $candidate) {
            VotingCandidate::create($candidate);
        }
    }
}
