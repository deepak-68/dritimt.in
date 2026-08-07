<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Registration;
use App\Models\Grievance;
use App\Models\Contact;
use App\Models\Studentrequest;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        'father_name' => 'required|max:255',
        'mother_name' => 'required|max:255',
        'gender' => 'required',
        'dob' => 'required',
        'phone' => 'required|numeric|digits:10',
        'email' => 'required|email',
        'category' => 'required',
        'hostel' => 'required',
        'bus_facility' => 'required',
        'last_exam_passes' => 'required',
    ]);
      $resultData=Registration::create($request->all());
      if(!empty($resultData)){
         return redirect()->back()->with('success',"Online Registeration submitted Successfuly");
      }else{
        return redirect()->back()->with('error',"Registeration failed ! Please try agian");
      }
    }

    public function grievance(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        'phone' => 'required|numeric|digits:10',
        'email' => 'required|email',
        'registration_no' => 'required',
        'course' => 'required',
        'year' => 'required',
        'complaint' => 'required',
    ]);
      $resultData=Grievance::create($request->all());
      if(!empty($resultData)){
         return redirect()->back()->with('success',"Grievance submitted Successfuly");
      }else{
        return redirect()->back()->with('error',"Grievance failed ! Please try agian");
      }
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        'phone' => 'required|numeric|digits:10',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);
      $resultData=Contact::create($request->all());
      if(!empty($resultData)){
         return redirect()->back()->with('success',"Request Submitted Successfuly");
      }else{
        return redirect()->back()->with('error',"Failed ! Please try agian");
      }
    }
   
   public function request(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        'phone' => 'required|numeric|digits:10',
        'email' => 'required|email',
        'address' => 'required',
        'course' => 'required',
    ]);
       // dd($request->all());
      $resultData=Studentrequest::create($request->all());
      if(!empty($resultData)){
         return redirect()->back()->with('success',"Request Submitted Successfuly");
      }else{
        return redirect()->back()->with('error',"Failed ! Please try agian");
      }
    }
}
