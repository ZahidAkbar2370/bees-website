<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PetitionController extends Controller
{
    public function store(Request $request)
    {
        $details  = Petition::create([
            "full_name" => $request->full_name,
            "sur_name" => $request->sur_name,
            "email" => $request->email,
            "country" => $request->country,
            "phone" => $request->phone,
            "need_campaign" => $request->yesorno,
        ]);

        \Mail::to($request->email)->send(new \App\Mail\PetitionMail($details));

        Session::flash("message", "Petition Sent Successfully!");
        return redirect()->back();
    }
}
