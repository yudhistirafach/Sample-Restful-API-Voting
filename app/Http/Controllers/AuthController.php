<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = Validator::make($request->all(), [
            "email" => "required|email",
            "password" => "required"
        ]);

        if ($credentials->fails()) {
            return response()->json(["success" => false, "message" => "Isi format dengan benar!"], 422);
        }

        $request->only("email", "password");

        $employee = Employee::where("email", $request->email)->first();

        if (!$employee || ($request->password != $employee->password)) {
            return response()->json(["success" => false, "message" => "Username dan password salah!"], 401);
        }

        return response()->json(["success" => true, "message" => "Berhasil melakukan login", "data" => $employee], 200);
    }
}
