<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Agency;

class HomeController extends Controller
{
    // return admin dashbord view
    public function index() {


        $user = Auth::user();
        $userId = $user->id;
        $agencies = Agency::where('user_id', '=', $userId )->get();
        
        //dd($userId);

        return view('admin.dashbord', compact('user', 'agencies'));

    }
}
