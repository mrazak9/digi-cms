<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendaRequest;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function store(AgendaRequest $request)
    {
        $data = $request->validated();
        Agenda::create($data);

        return redirect()->route('agendas.index')->with('success', 'Agenda created successfully!');
    }

    public function update(AgendaRequest $request, Agenda $agenda)
    {
        $data = $request->validated();
        $agenda->update($data);

        return redirect()->route('agendas.index')->with('success', 'Agenda updated successfully!');
    }
}
