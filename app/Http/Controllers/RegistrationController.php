<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Registration;
use App\Models\Grievance;
use App\Models\Contact;
use App\Models\Studentrequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportRegistration;
use App\Exports\ExportContact;
use App\Exports\ExportGrievance;
use App\Exports\ExportRequest;
class RegistrationController extends Controller
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
        return view('registration.index');
    }
    
    public function registration_detail($id){
        if($id){
          $data = Registration::where('id',$id)->first();
          if(!empty($data)){
            return view("registration.detail", ["data"=>$data]); 
          }else{
           return redirect()->back()->with('error',"No Records Found!");  
         }
        }else{
            return redirect()->back()->with('error',"Invalid ID ! Please try agian");
        }
    }
    
    public function RegistrationDataTable(Request $request){
        $columns          = array(
                                    0 =>'id',
                                    1 =>'name',
                                    2 =>'gender',
                                    3 =>'dob',
                                    4 =>'phone',
                                    5 =>'category',
                                    6 =>'course',
                                    7 =>'created_at',
                                    8 =>'action',
                            );
        $registrations              = Registration::query();
        $registrations              = $this->buildQuery($registrations, $request);
        $totalData                  = $registrations->count();
        $totalFiltered              = $totalData;
        $limit                      = $request->input('length');
        $start                      = $request->input('start');
        $order                      = $columns[$request->input('order.0.column')];
        $dir                        = $request->input('order.0.dir');
        $registrations              = $registrations->offset($start)->limit($limit)->orderBy($order,'ASC')->get();
        $data                       = array();

        if(!empty($registrations)){
            $i =$start;
            foreach ($registrations as $row){
                
                $i++;
                $show                               =   '/registration/detail/'.$row->id;
                $showbtn                            =   "<a href='{$show}' data-toggle='tooltip' data-placement='top' class='action-btn' title='View User'> <i class='fa fa-eye'></i></a>";
                $action                             =   $showbtn;

                $nestedData['id']                   = $i;
                $nestedData['name']                 = $row->name ? $row->name : '';
                $nestedData['gender']               = $row->gender ? $row->gender : '';
                $nestedData['dob']                  = !empty($row->dob) ? \Carbon\Carbon::parse($row->dob)->format('d-m-Y') : '';
                $nestedData['phone']                = $row->phone ? $row->phone : '';
                $nestedData['category']             = $row->category ? $row->category : '';
                $nestedData['course']               = $row->course ? $row->course : '';
                $nestedData['created_at']           = $row->created_at ? \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') : '';
                $nestedData['action']               = $action;
                $data[]                             = $nestedData;
            }
        }

        $json_data = array(
                        "draw"            => intval($request->input('draw')),
                        "recordsTotal"    => intval($totalData),
                        "recordsFiltered" => intval($totalFiltered),
                        "data"            => $data
                    );
        return json_encode($json_data,true);
    }
    
    public function buildQuery($registrations, $request)
    {
        $date_range     = $request->input('columns.1.search.value');
        $name           = $request->input('columns.2.search.value');
        $gender         = $request->input('columns.3.search.value');
        $dob            = $request->input('columns.4.search.value');
        $phone          = $request->input('columns.5.search.value');
        $category       = $request->input('columns.6.search.value');

        if (!empty($date_range)) {
            $date_range = explode(',', $date_range);
            if (isset($date_range[0]) && isset($date_range[1])) {
                $startDate = $date_range[0] . ' 00:00:00';
                $endDate = $date_range[1] . ' 23:59:59';
                $registrations->whereBetween('created_at', [$startDate, $endDate]);
            }
        }
        if (!empty($name)) {
            $registrations->where('name', 'like', "%$name%");
        }
        if (!empty($gender)) {
            $registrations->where('gender', $gender);
        }

        if (!empty($dob)) {
            $registrations->where('dob', $dob);
        }

        if (!empty($phone)) {
            $registrations->where('phone', 'like', "%$phone%");
        }
        if (!empty($category)) {
            $registrations->where('category', $category);
        }

        

        return $registrations;
    }
    public function regexport(Request $request){
        $data=array('from_date' => $request->input('from_date').' 00:00:00','to_date' => $request->input('to_date').' 23:59:59');
       return Excel::download(new ExportRegistration($data), 'registration.xlsx');
    }
    public function grievancelist()
    {
        return view('grievance.index', [
            'users' => Grievance::orderBy('id')->paginate(15)
        ]);
    }
    public function grievancexport(Request $request){
        $data=array('from_date' => $request->input('from_date').' 00:00:00','to_date' => $request->input('to_date').' 23:59:59');
       return Excel::download(new ExportGrievance($data), 'grievance.xlsx');
    }
    
    public function grievance_detail($id){
        if($id){
          $data = Grievance::where('id',$id)->first();
          if(!empty($data)){
            return view("grievance.detail", ["data"=>$data]); 
          }else{
           return redirect()->back()->with('error',"No Records Found!");  
         }
        }else{
            return redirect()->back()->with('error',"Invalid ID ! Please try agian");
        }
    }
    
    public function GrievanceDataTable(Request $request){
        $columns          = array(
                                    0 =>'id',
                                    1 =>'name',
                                    2 => 'registration_no',
                                    3 =>'phone',
                                    4 =>'email',
                                    5 =>'course',
                                    6 =>'year',
                                    6 =>'date',
                                    7 =>'action',
                            );
        $registrations              = Grievance::query();
        $registrations              = $this->grievanceBuildQuery($registrations, $request);
        $totalData                  = $registrations->count();
        $totalFiltered              = $totalData;
        $limit                      = $request->input('length');
        $start                      = $request->input('start');
        $order                      = $columns[$request->input('order.0.column')];
        $dir                        = $request->input('order.0.dir');
        $registrations              = $registrations->offset($start)->limit($limit)->orderBy($order,'ASC')->get();
        $data                       = array();
        if(!empty($registrations)){
            $i =$start;
            foreach ($registrations as $row){
                
                $i++;
                $show                               = '/grievance/detail/'.$row->id;
                $showbtn                            = "<a href='{$show}' data-toggle='tooltip' data-placement='top' class='action-btn' title='View User'> <i class='fa fa-eye'></i></a>";
                $action                             = $showbtn;
                $nestedData['id']                   = $i;
                $nestedData['name']                 = $row->name ? $row->name : '';
                $nestedData['registration_no']      = $row->registration_no ? $row->registration_no : '';
                $nestedData['phone']                = $row->phone ? $row->phone : '';
                $nestedData['email']                = $row->email ? $row->email : '';
                $nestedData['course']               = $row->course ? $row->course : '';
                $nestedData['year']                 = $row->year ? $row->year : '';
                $nestedData['created_at']           = $row->created_at ? \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') : '';
                $nestedData['action']               = $action;
                $data[]                             = $nestedData;
            }
        }

        $json_data = array(
                        "draw"            => intval($request->input('draw')),
                        "recordsTotal"    => intval($totalData),
                        "recordsFiltered" => intval($totalFiltered),
                        "data"            => $data
                    );
        return json_encode($json_data,true);
    }
    
    public function grievanceBuildQuery($registrations, $request)
    {
        $date_range       = $request->input('columns.1.search.value');
        $name             = $request->input('columns.2.search.value');
        $phone            = $request->input('columns.3.search.value');
        $course           = $request->input('columns.5.search.value');
        $year             = $request->input('columns.6.search.value');

        if (!empty($date_range)) {
            $date_range = explode(',', $date_range);
            if (isset($date_range[0]) && isset($date_range[1])) {
                $startDate = $date_range[0] . ' 00:00:00';
                $endDate = $date_range[1] . ' 23:59:59';
                $registrations->whereBetween('created_at', [$startDate, $endDate]);
            }
        }
        if (!empty($name)) {
            $registrations->where('name', 'like', "%$name%");
        }
        if (!empty($phone)) {
            $registrations->where('phone', 'like', "%$phone%");
        }
        if (!empty($course)) {
            $registrations->where('course', 'like', "%$course%");
        }
        if (!empty($year)) {
            $registrations->where('year', 'like', "%$year%");
        }
        
        return $registrations;
    }
   
    public function contact()
    {
        return view('contact.index', [
            'users' => Contact::orderBy('id')->paginate(15)
        ]);
    }
    
    public function contact_detail($id){
        if($id){
          $data = Contact::where('id',$id)->first();
          if(!empty($data)){
            return view("contact.detail", ["data"=>$data]); 
          }else{
           return redirect()->back()->with('error',"No Records Found!");  
         }
        }else{
            return redirect()->back()->with('error',"Invalid ID ! Please try agian");
        }
    }
    public function contactexport(Request $request){
        $data=array('from_date' => $request->input('from_date').' 00:00:00','to_date' => $request->input('to_date').' 23:59:59');
       return Excel::download(new ExportContact($data), 'contact.xlsx');
    }  
    
    public function ContactDataTable(Request $request){
        $columns          = array(
                                    0 =>'id',
                                    1 =>'name',
                                    2 =>'phone',
                                    3 =>'email',
                                    4 =>'subject',
                                    5 =>'created_at',
                                    6 =>'action',
                            );
        $registrations              = Contact::query();
        $registrations              = $this->contactBuildQuery($registrations, $request);
        $totalData                  = $registrations->count();
        $totalFiltered              = $totalData;
        $limit                      = $request->input('length');
        $start                      = $request->input('start');
        $order                      = $columns[$request->input('order.0.column')];
        $dir                        = $request->input('order.0.dir');
        $registrations              = $registrations->offset($start)->limit($limit)->orderBy($order,'ASC')->get();
        $data                       = array();
        if(!empty($registrations)){
            $i =$start;
            foreach ($registrations as $row){
                
                $i++;
                $show                               =   '/contact/detail/'.$row->id;
                $showbtn                            =   "<a href='{$show}' data-toggle='tooltip' data-placement='top' class='action-btn' title='View User'> <i class='fa fa-eye'></i></a>";
                $action                             =   $showbtn;
                $nestedData['id']                   = $i;
                $nestedData['name']                 = $row->name ? $row->name : '';
                $nestedData['phone']                = $row->phone ? $row->phone : '';
                $nestedData['email']                = $row->email ? $row->email : '';
                $nestedData['subject']              = $row->subject ? $row->subject : '';
                $nestedData['created_at']           = $row->created_at ? \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') : '';
                $nestedData['action']               = $action;
                $data[]                             = $nestedData;
            }
        }

        $json_data = array(
                        "draw"            => intval($request->input('draw')),
                        "recordsTotal"    => intval($totalData),
                        "recordsFiltered" => intval($totalFiltered),
                        "data"            => $data
                    );
        return json_encode($json_data,true);
    }
    
    public function contactBuildQuery($registrations, $request)
    {
        $date_range    = $request->input('columns.1.search.value');
        $name          = $request->input('columns.2.search.value');
        $phone         = $request->input('columns.3.search.value');
        $email         = $request->input('columns.4.search.value');

        if (!empty($date_range)) {
            $date_range = explode(',', $date_range);
            if (isset($date_range[0]) && isset($date_range[1])) {
                $startDate = $date_range[0] . ' 00:00:00';
                $endDate = $date_range[1] . ' 23:59:59';
                $registrations->whereBetween('created_at', [$startDate, $endDate]);
            }
        }
        if (!empty($name)) {
            $registrations->where('name', 'like', "%$name%");
        }
        if (!empty($phone)) {
            $registrations->where('phone', 'like', "%$phone%");
        }

        if (!empty($email)) {
            $registrations->where('email', 'like', "%$email%");
        }
        
        return $registrations;
    }
    
  public function student_request()
    {
        return view('request.index', [
            'users' => Studentrequest::orderBy('id')->paginate(15)
        ]);
    }
    
     public function request_detail($id){
        if($id){
          $data = Studentrequest::where('id',$id)->first();
          if(!empty($data)){
            return view("request.detail", ["data"=>$data]); 
          }else{
           return redirect()->back()->with('error',"No Records Found!");  
         }
        }else{
            return redirect()->back()->with('error',"Invalid ID ! Please try agian");
        }
    }
    public function requestexport(Request $request){
        $data=array('from_date' => $request->input('from_date').' 00:00:00','to_date' => $request->input('to_date').' 23:59:59');
       return Excel::download(new ExportRequest($data), 'requestlist.xlsx');
    }
    
    public function RequestDataTable(Request $request){
        $columns          = array(
                                    0 =>'id',
                                    1 =>'name',
                                    2 =>'phone',
                                    3 =>'email',
                                    4 =>'course',
                                    5 =>'type',
                                    6 =>'created_at'
                            );
        $registrations              = Studentrequest::query();
        $registrations              = $this->requestBuildQuery($registrations, $request);
        $totalData                  = $registrations->count();
        $totalFiltered              = $totalData;
        $limit                      = $request->input('length');
        $start                      = $request->input('start');
        $order                      = $columns[$request->input('order.0.column')];
        $dir                        = $request->input('order.0.dir');
        $registrations              = $registrations->offset($start)->limit($limit)->orderBy($order,'ASC')->get();
        //dd($request->all());
        $data                       = array();

        if(!empty($registrations)){
            $i =$start;
            foreach ($registrations as $row){
                
                $i++;
                $show                               =   '/request/detail/'.$row->id;
                $showbtn                            =   "<a href='{$show}' data-toggle='tooltip' data-placement='top' class='action-btn' title='View User'> <i class='fa fa-eye'></i></a>";
                $action                             =   $showbtn;

                $nestedData['id']                   = $i;
                $nestedData['name']                 = $row->name ? $row->name : '';
                $nestedData['phone']                = $row->phone ? $row->phone : '';
                $nestedData['email']                = $row->email ? $row->email : '';
                $nestedData['course']               = $row->course ? $row->course : '';
                $nestedData['type']                 = $row->type ? $row->type : '';
                $nestedData['created_at']           = $row->created_at ? \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') : '';
                $nestedData['action']               = $action;
                $data[]                             = $nestedData;
            }
        }

        $json_data = array(
                        "draw"            => intval($request->input('draw')),
                        "recordsTotal"    => intval($totalData),
                        "recordsFiltered" => intval($totalFiltered),
                        "data"            => $data
                    );
        return json_encode($json_data,true);
    }
    
    public function requestBuildQuery($registrations, $request)
    {
        $date_range    = $request->input('columns.1.search.value');
        $name          = $request->input('columns.2.search.value');
        $phone         = $request->input('columns.3.search.value');
        $course        = $request->input('columns.6.search.value');
        $type          = $request->input('columns.7.search.value');

        if (!empty($date_range)) {
            $date_range = explode(',', $date_range);
            if (isset($date_range[0]) && isset($date_range[1])) {
                $startDate = $date_range[0] . ' 00:00:00';
                $endDate = $date_range[1] . ' 23:59:59';
                $registrations->whereBetween('created_at', [$startDate, $endDate]);
            }
        }
        if (!empty($name)) {
            $registrations->where('name', 'like', "%$name%");
        }
        if (!empty($phone)) {
            $registrations->where('phone', 'like', "%$phone%");
        }

        if (!empty($course)) {
            $registrations->where('course', 'like', "%$course%");
        }

        if (!empty($type)) {
            $registrations->where('type',  'like', "%$type%");
        }
        
        return $registrations;
    }

}
