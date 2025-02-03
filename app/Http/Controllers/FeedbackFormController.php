<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackFormController extends Controller
{
    public function store(Request $request)
    {
        $receivedForm = $request->validate([
            "first_name" => "required|string|max:50",
            "last_name" => "nullable|string|max:50",
            "email" => "required|email|max:50",
            "phone" => "required|string|max:20",
            "message" => "required|string|max:500",
        ]);


        Feedback::create($receivedForm);

        $data = ["success" =>true];
        return response()->json($data);
    }
}
