<?php

namespace App\Http\Controllers;

use App\Models\Observation;
use Illuminate\Http\Request;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $observations = Observation::all(); //select * from causal
        //dd($causals); 
        return view('observation.index', compact('observations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('observation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $observation = Observation::create($request->all()); //insert into causal (description) values ('xxx')
        session()->flash('message', 'Registro Creado Exitosamente');
        return redirect()->route('observation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $observation = Observation::find($id);
        if($observation)// si la causal existe
        {
            return view('observation.edit', compact('observation'));
        }
        else
        {
            return redirect()->route('observation.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $observation = Observation::find($id);
        if($observation)// si la causal existe
        {
            $observation->update($request->all()); //delete from causal where id = x
            session()->flash('message','Registro Actualizado Exitosamente');
        }
        else
        {
            session()->flash('warning','No Se Encuentra El Registro Solicitado');
        }
        
        return redirect()->route('causal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $observation = Observation::find($id);
        if($observation)// si la causal existe
        {
            $observation->delete(); //delete from causal where id = x
            session()->flash('message','Registro Eliminado Exitosamente');
        }
        else
        {
            session()->flash('warning','No Se Encuentra El Registro Eliminado');
        }
        
        return redirect()->route('observation.index');
    }
}
