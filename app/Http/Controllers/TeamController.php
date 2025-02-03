<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function team()
    {
        $membersData = Employee::all();
        return view("team.index", compact("membersData"));

    }


}
