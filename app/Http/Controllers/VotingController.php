<?php

namespace App\Http\Controllers;

use App\Models\VotingDetail;
use App\Models\VotingEvent;
use Illuminate\Http\Request;
use Validator;

class VotingController extends Controller
{
    public function employeeVoting(Request $request, $eventId) {
        $validated = Validator::make($request->all(), [
            "votedCandidateId" => "numeric|required",
            "employeeId" => "numeric|required"
        ]);

        if ($validated->fails()) {
            return response()->json(["success" => false, "message" => "Data kurang tepat"], 422);
        }

        $votingData = $request->only("votedCandidateId", "employeeId");
        $voting = VotingDetail::create($votingData);

        if (!$voting) {
            return response()->json(["success" => false, "message" => "Gagal melakukan voting!"], 404);
        }

        VotingEvent::where('id', $eventId)->increment('voters', 1);
        
        return response()->json(["success" => true, "message" => "Berhasil melakukan voting", "data" => $voting], 200);
    }
}
