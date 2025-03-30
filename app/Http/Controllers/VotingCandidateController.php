<?php

namespace App\Http\Controllers;

use App\Models\VotingCandidate;
use Illuminate\Http\Request;

class VotingCandidateController extends Controller
{
    public function getCandidateByVotingEvent(Request $request, $eventId) {
        $candidates = VotingCandidate::where('votingEventId', $eventId)
                        ->join('employees', 'voting_candidates.employeeId', '=', 'employees.id')
                        ->get();

        return response()->json(['success'=> true, 'message' => 'Berhasil mendapatkan data', 'data'=> $candidates], 200);
    }
}
