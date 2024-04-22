<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::orderBy('id', 'asc')->get();
        return view('Tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'group_name' => 'required|string|max:50',
           'participants' => 'required|string|max:11',
           'contact_person' => 'required|string|max:50',
           'email' => 'required|string|email|max:255',
           'phone' => 'required|string|max:8',
           'comment' => 'required|string|max:255'
        ]);

        Ticket::create([
            'group_name' => $request->group_name,
            'participants' => $request->participants,
            'contact_person' => $request->contact_person,
            'email' => $request->email,
            'phone' => $request->phone,
            'comment' => $request->comment,
        ]);

        return redirect('tickets');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('Tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'group_name' => 'required|string|max:50',
            'participants' => 'required|string|max:11',
            'contact_person' => 'required|string|max:50',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:8',
            'comment' => 'required|string|max:255'
        ]);

        $ticket->update($request->all());

        return redirect('/tickets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect('/tickets');
    }
}
