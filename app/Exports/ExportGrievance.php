<?php

namespace App\Exports;

use App\Models\Grievance;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportGrievance implements FromCollection,WithHeadings
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
            'registration No',
		    'Phone',
            'Email',
            'Course ',
            'Year',
            'complaint',
            'Date'
        ];
    } 
	
    public function collection()
    {   
	    return Grievance::select('name','registration_no','phone','email','course','year','complaint','created_at')->where('created_at', '>=', $this->from_date)->where('created_at', '<=', $this->to_date)->get();
    }
}
