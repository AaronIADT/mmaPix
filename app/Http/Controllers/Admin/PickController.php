<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pick;

class PickController extends Controller
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
      $picks = Pick::all();

      return view('admin.picks.index', [
        'picks' => $picks
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.picks.create');
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
          'fight1' => 'required|max:191',
          'fight2' => 'required|max:191',
          'fight3' => 'required|max:191',
          'fight4' => 'required|max:191',
          'fight5' => 'required|max:191',
          'fight6' => 'required|max:191',
          'fight7' => 'required|max:191',
          'fight8' => 'required|max:191',
          'fight9' => 'required|max:191',
          'fight10' => 'required|max:191',
      ]);


      $pick = new Pick();

      $pick->fight1 = $request->input('fight1');
      $pick->fight2 = $request->input('fight2');
      $pick->fight3 = $request->input('fight3');
      $pick->fight4 = $request->input('fight4');
      $pick->fight5 = $request->input('fight5');
      $pick->fight6 = $request->input('fight6');
      $pick->fight7 = $request->input('fight7');
      $pick->fight8 = $request->input('fight8');
      $pick->fight9 = $request->input('fight9');
      $pick->fight10 = $request->input('fight10');

      $pick->save();

      return redirect()->route('admin.picks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $pick = Pick::findOrFail($id);

      return view('admin.picks.show', [
        'pick' => $pick
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
      $pick = Pick::findOrFail($id);

      return view('admin.picks.edit', [
        'pick' => $pick
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
          'fight1' => 'required|max:191',
          'fight2' => 'required|max:191',
          'fight3' => 'required|max:191',
          'fight4' => 'required|max:191',
          'fight5' => 'required|max:191',
          'fight6' => 'required|max:191',
          'fight7' => 'required|max:191',
          'fight8' => 'required|max:191',
          'fight9' => 'required|max:191',
          'fight10' => 'required|max:191',
      ]);


      $pick = Pick::findOrFail($id);

      $pick->fight1 = $request->input('fight1');
      $pick->fight2 = $request->input('fight2');
      $pick->fight3 = $request->input('fight3');
      $pick->fight4 = $request->input('fight4');
      $pick->fight5 = $request->input('fight5');
      $pick->fight6 = $request->input('fight6');
      $pick->fight7 = $request->input('fight7');
      $pick->fight8 = $request->input('fight8');
      $pick->fight9 = $request->input('fight9');
      $pick->fight10 = $request->input('fight10');

      $pick->save();

      return redirect()->route('admin.picks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pick = Pick::findOrFail($id);
      $pick->delete();

      return redirect()->route('admin.picks.index');
    }
}
