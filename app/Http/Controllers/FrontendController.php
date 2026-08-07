<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class FrontendController extends Controller
{
     public function events()
    {
        return view('frontend.events',[
            'events' => Event::orderBy('id', 'DESC')->get()
        ]);
    }
}
