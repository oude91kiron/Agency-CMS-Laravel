<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\land;
use App\Models\Agency;


class LandController extends Controller
{
    /**
     * @param void
     * @return Land $lands
     */
    public function index() {

        $user = Auth::user();
        $userId = $user->id;

        $agencies = Agency::where('user_id', '=', $userId)->get();

        //dd($agencies);
        return view('admin.land.view', compact('agencies', 'user'));
    }


    /**
     * Method to store a new land 
     */
    public function store(Request $request, Agency $agencyId) {

        $land = new land;

        $land->landDigramNo =  $request->name;
        $land->landDescription =  $request->phone;
        $land->landDirections =  $request->email;
        $land->landArea = $request->status;
        $land->landNo = $request->status;
        $land->price = $request->price;
        // rleation attribute
        $land->agency_id =  $agencyId;

        $land->save();

        redirect()->back()->with('message', 'land has been added Successfuly');
    }


    /**
     * Method to show create land page
     */
    public function create() {

        $user = Auth::user();

        $agencies = Agency::get();

        return view('admin.land.create', compact('agencies', 'user'));

    } 
}
