<?php

namespace App\Http\Controllers;

use App\Models\VotingCandidate;
use App\Models\VotingEvent;
use Illuminate\Http\Request;

class VotingEventController extends Controller
{
    public function getAllVotingEvents(Request $request) {
        $events = VotingEvent::all();

        return response()->json(["success" => true, 'message' => 'Berhasil mendapatkan data!', "data" => $events], 200);
    }
}
