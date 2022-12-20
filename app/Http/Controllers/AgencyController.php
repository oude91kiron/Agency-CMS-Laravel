<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\User;

class AgencyController extends Controller
{
    /**
     * @param void
     * @return Agency $agencies 
     * 
     * Method to show all agencies
     */
    public function index() {

        $user = Auth::user();
        $userId = $user->id;

        $agencies = Agency::where('user_id', '=', $userId )->get();
        
        return view('admin.agency.view', compact('agencies', 'user'));

    }


    /**
     * Method to store a new agency 
     */
    public function store(Request $request) {

        $user = Auth::user();
        $userId = $user->id;

        $agency = new Agency;

        $agency->name =  $request->name;
        $agency->phone =  $request->phone;
        $agency->email =  $request->email;
        $agency->status = $request->status;

        $agency->user_id =  $userId;

        $agency->save();

        return redirect()->back()->with('message', 'Agency has been added Successfuly');
    }


    /**
     * Method to show create agency page
     */
    public function create() {

        $user = Auth::user();

        return view('admin.agency.create', compact('user'));

    }
}
