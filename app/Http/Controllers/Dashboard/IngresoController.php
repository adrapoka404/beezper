<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIncome;
use App\Models\Income;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:dashboard.ingresos.index')->only('index');
        $this->middleware('can:dashboard.ingresos.create')->only('create', 'store');
        $this->middleware('can:dashboard.ingresos.edit')->only('edit', 'update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::orderBy('id', 'desc')->paginate(5);
        return view('dashboard.ingresos.index', compact('incomes')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ingresos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncome $request)
    {
        Income::create($request->all());
        return redirect()->route('dashboard.ingresos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ingreso)
    {
        $income = Income::find($ingreso);
        return view('dashboard.ingresos.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreIncome $request, Income $ingreso)
    {
        $ingreso->update($request->all());

        return redirect()->route('dashboard.ingresos.index');
    }
}
