<?php

namespace App\Exports;

use App\Models\Studentrequest;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportRequest implements FromCollection,WithHeadings
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
            'Phone',
            'Email',
            'Address',
            'Course',
            'type',
            'Date'
        ];
    } 
	
    public function collection()
    {   
	    return Studentrequest::select('name','phone','email','address','course','type','created_at')->where('created_at', '>=', $this->from_date)->where('created_at', '<=', $this->to_date)->get();
    }
}
