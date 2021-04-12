<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Fight;
use App\Models\Fighter;

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
      $this->middleware('role:admin');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $events = Event::all();
      $fights = Fight::all();

      return view('admin.events.index', [
        'events' => $events,
        'fights' => $fights
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'nameEvent' => 'required|max:191',
          'subName' => 'required|max:191',
          'location' => 'required|max:191',
          'startTime' => 'required|max:191',
          'dateEvent' => 'required|max:191',
          'pictureEvent' => 'required|max:191',
          'logoEvent' => 'required|max:191'
      ]);


      $event = new Event();

      $event->nameEvent = $request->input('nameEvent');
      $event->subName = $request->input('subName');
      $event->location = $request->input('location');
      $event->startTime = $request->input('startTime');
      $event->dateEvent = $request->input('dateEvent');
      $event->pictureEvent = $request->input('pictureEvent');
      $event->logoEvent = $request->input('logoEvent');

      $event->save();

      return redirect()->route('admin.events.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $event = Event::findOrFail($id);
      $fights = Fight::where('event_id', $id)->get();
      //$fights = Fight::all();
      // $fighters = Fighter::all();




      return view('admin.events.show', [
        'event' => $event,
         'fights' => $fights,
        // 'fighters' => $fighters
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $event = Event::findOrFail($id);

      return view('admin.events.edit', [
        'event' => $event
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
          'nameEvent' => 'required|max:191',
          'subName' => 'required|max:191',
          'location' => 'required|max:191',
          'startTime' => 'required|max:191',
          'dateEvent' => 'required|max:191',
          'pictureEvent' => 'required|max:191',
          'logoEvent' => 'required|max:191'
      ]);

      $event = Fighter::findOrFail($id);

      $event->nameEvent = $request->input('nameEvent');
      $event->subName = $request->input('subName');
      $event->location = $request->input('location');
      $event->startTime = $request->input('startTime');
      $event->dateEvent = $request->input('dateEvent');
      $event->pictureEvent = $request->input('pictureEvent');
      $event->logoEvent = $request->input('logoEvent');

      $event->save();

      return redirect()->route('admin.events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $event = Event::findOrFail($id);
      $event->delete();

      return redirect()->route('admin.events.index');
    }
}
