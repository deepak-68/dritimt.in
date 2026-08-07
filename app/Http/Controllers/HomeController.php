<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headersetting;
use App\Models\Footersetting;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        return view('home');
    }
    public function profile()
    {
        return view('users.profile');
    }
    public function setting()
    {
        return view('setting.profile');
    }
    
     public function header()
    {
        return view('setting.header', [
            'header' => Headersetting::first()
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function headerupdate(Request $request, $id)
    {
        $head = Headersetting::find($id);
        $head->phone = $request->input('phone');
        $head->news = $request->input('news');
        $head->update();
        return redirect('header')->withSuccess('Header setting is updated successfully.');
        }
        
     public function footer()
    {
         return view('setting.footer', [
            'footer' => Footersetting::orderBy('id')->paginate(15)
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function footerupdate(Request $request)
    {
        $footArray=$request->all();
        foreach($footArray['link'] as $key =>$foot){
         Footersetting::where('id', $key)->update(['link' => $foot]); 
        }
        return redirect('footer')->withSuccess('Footer setting is updated successfully.');
    }
    
    
}
