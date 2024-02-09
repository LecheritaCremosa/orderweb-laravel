<?php

namespace App\Http\Controllers;

use App\Models\TypeActivity;
use Illuminate\Http\Request;

class TypeActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_activities = TypeActivity::all(); //select * from causal
        //dd($type_activities); 
        return view('type_activity.index', compact('type_activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type_activity = TypeActivity::create($request->all()); //insert into causal (description) values ('xxx')
        session()->flash('message', 'Registro Creado Exitosamente');
        return redirect()->route('type_activity.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $type_activity = TypeActivity::find($id);
        if($type_activity)// si la causal existe
        {
            return view('type_activity.edit', compact('type_activity'));
        }
        else
        {
            return redirect()->route('type_activity.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type_activity = TypeActivity::find($id);
        if($type_activity)// si la causal existe
        {
            $type_activity->update($request->all()); //delete from causal where id = x
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
        $type_activity = TypeActivity::find($id);
        if($type_activity)// si la causal existe
        {
            $type_activity->delete(); //delete from causal where id = x
            session()->flash('message','Registro Eliminado Exitosamente');
        }
        else
        {
            session()->flash('warning','No Se Encuentra El Registro Eliminado');
        }
        
        return redirect()->route('type_activity.index');
    }
}
