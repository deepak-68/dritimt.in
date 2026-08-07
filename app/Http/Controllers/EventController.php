<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
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
        return view('events.index',[
            'events' => Event::orderBy('id', 'DESC')->paginate(10)
        ]);
    }
    
        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $user = Event::create($input);
        //return redirect()->back()->with('success', 'New event is added successfully.');   
        return redirect('event')->withSuccess('New event is added successfully.');
    }
    
       /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
     $event = Event::find($id);
        return view('events.edit', compact('event'));    
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->update();
        return redirect('event')->withSuccess('Event is updated successfully.');
        }
        
           /**
     * Show the form for editing the specified resource.
     */
    public function delete($id)
    {
     $event = Event::find($id);
     $event->delete();
      return redirect('event')->withSuccess('Event deleted successfully.');    
    }
}
