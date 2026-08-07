<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => [
                'required',
                'regex:/^[A-Za-z\s]+$/',
                'min:3',
                'max:50'
            ],
            'phone' => [
                'required',
                'digits:10',
                'regex:/^[6-9]\d{9}$/'
            ],
            'course' => 'required'
        ], [
            'name.regex' => 'Name should contain only letters.',
            'phone.regex' => 'Enter valid Indian phone number.',
        ]);

        // Save data
        Enquiry::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'course' => $request->course,
        ]);

        return back()->with('success', 'Enquiry submitted successfully!');
    }
}
