<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fighter;

class FighterController extends Controller
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

        $fighters = Fighter::orderBy('name')->paginate(12);

        return view('admin.fighters.index', [
          'fighters' => $fighters
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fighters.create');
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
            'name' => 'required|max:191',
            'age' => 'required|integer|max:191',
            'height' => 'required|max:191',
            'weight' => 'required|max:191',
            'reach' => 'required|max:191',
            'record' => 'required|max:191',
            'country' => 'required|max:191',
            'picfighter' => 'required|max:255'
        ]);


        $fighter = new Fighter();

        $fighter->name = $request->input('name');
        $fighter->age = $request->input('age');
        $fighter->height = $request->input('height');
        $fighter->weight = $request->input('weight');
        $fighter->reach = $request->input('reach');
        $fighter->record = $request->input('record');
        $fighter->country = $request->input('country');
        $fighter->picfighter = $request->input('picfighter');

        $fighter->save();

        return redirect()->route('admin.fighters.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $fighter = Fighter::findOrFail($id);

      return view('admin.fighters.show', [
        'fighter' => $fighter
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
        $fighter = Fighter::findOrFail($id);

        return view('admin.fighters.edit', [
          'fighter' => $fighter
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
            'name' => 'required|max:191',
            'age' => 'required|integer|max:191',
            'height' => 'required|max:191',
            'weight' => 'required|max:191',
            'reach' => 'required|max:191',
            'record' => 'required|max:191',
            'country' => 'required|max:191',
            'picfighter' => 'required|max:255'
        ]);

        $fighter = Fighter::findOrFail($id);

        $fighter->name = $request->input('name');
        $fighter->age = $request->input('age');
        $fighter->height = $request->input('height');
        $fighter->weight = $request->input('weight');
        $fighter->reach = $request->input('reach');
        $fighter->record = $request->input('record');
        $fighter->country = $request->input('country');
        $fighter->picfighter = $request->input('picfighter');

        $fighter->save();

        return redirect()->route('admin.fighters.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $fighter = Fighter::findOrFail($id);
      $fighter->delete();

      return redirect()->route('admin.fighters.index');
    }
}
