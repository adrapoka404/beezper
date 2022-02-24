<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActivity;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:dashboard.actividades.index')->only('index');
        $this->middleware('can:dashboard.actividades.create')->only('create', 'store');
        $this->middleware('can:dashboard.actividades.edit')->only('edit', 'update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::orderBy('id', 'desc')->paginate(5);
        return view('dashboard.actividades.index', compact('activities')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.actividades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivity $request)
    {
        
        Activity::create($request->all());
        return redirect()->route('dashboard.actividades.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($actividad)
    {
        $activity = Activity::find($actividad);
        return view('dashboard.actividades.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreActivity $request, $actividad)
    {
        
        $actividad = Activity::find($actividad);
        $actividad->update($request->all());

        return redirect()->route('dashboard.actividades.index');

    }
}
