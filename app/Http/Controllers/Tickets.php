<?php

// Controlador de tickets

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tickets extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()

    {
        // Llamar el index de inicio para la vista
        //$tickets = Tickets::all();
        //return view("crud.index", compact("tickets"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Llamar el form de crear para la vista
        return view("crud.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tickets::create($request->all());
        return redirect()->route("ticket.index")->with('Ticket, creado con exito');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
