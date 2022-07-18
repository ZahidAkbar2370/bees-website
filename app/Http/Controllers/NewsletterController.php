<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $insertNewsletter = Newsletter::create([
            "email" => $request->email;
        ]);

        Session::flash("message", "Newsletter Subscribed Successfully!");
        return redirect()->back();
    }
}
