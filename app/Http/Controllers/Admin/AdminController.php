<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    return view('admin.home.index');
    }

//    public function direction(Admin $admin)
//    {
//        $data = $admin->getDirection();
//        return view('admin.direction',compact('data'));
//    }

    public function position(Admin $admin)
    {
        $dataDirection = $admin->getDirection();
        $dataPosition = $admin->getPosition();
        return view('admin.position.index',compact(['dataPosition',"dataDirection"]));
    }


    public function savePosition(Request $request, Admin $admin)
    {
        $admin->savePosition($request);
        return redirect()->back();
    }


    public function deletePosition(Request $request, Admin $admin)
    {
        $admin->deletePosition($request);
        return redirect()->back();

    }

    public function phone(Admin $admin)
    {
        $data = $admin->getPhone();
        return view('admin.phone',compact('data'));
    }

    public function savePhone(Request $request, Admin $admin)
    {
        $admin->savePhone($request);
        return redirect()->back();
    }

    public function deletePhone(Request $request, Admin $admin)
    {
        $admin->deletePhone($request);
        return redirect()->back();
    }

    public function team(Admin $admin)
    {
        $teamData = $admin->getTeam();
        $positionData = $admin->getPosition();
        return view('admin.member',compact('teamData','positionData'));
    }


    public function saveTeam(Request $request, Admin $admin)
    {
        $admin->saveTeam($request);
        return redirect()->back();

    }

    public function deleteTeam(Request $request, Admin $admin)
    {
        $result = $admin->deleteTeam($request);
        return redirect()->back();
    }









}
