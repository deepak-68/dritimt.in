<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportRegistration implements FromCollection,WithHeadings
{
   /**
    * @return \Illuminate\Support\Collection
    */
	 public function __construct($data)
    {
        $this->from_date = $data['from_date'];
		$this->to_date = $data['to_date'];
    }
	
	public function headings():array{
        return[
            'Name',
            'Father Name',
			'Mother Name',
            'Gender',
            'DOB',
            'Phone',
            'Email',
            'Category',
            'Hostal',
            'Bus Facility',
            'Last Exam Passes',
            'Course ',
            'Rank ',
            'Address',
            'Date'
        ];
    } 
	
    public function collection()
    {   
	    return Registration::select('name','father_name','mother_name','gender','dob','phone','email','category','hostel','bus_facility','last_exam_passes','course','rank','address','created_at')->where('created_at', '>=', $this->from_date)->where('created_at', '<=', $this->to_date)->get();
    }
}
