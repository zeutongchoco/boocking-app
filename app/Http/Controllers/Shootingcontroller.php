<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shooting;

class ShootingController extends Controller
{
    public function index()
    {
        $shootings = Shooting::all();
        return view('shooting.index', compact('shootings'));
    }
    public function show($id)
{
    $shooting = Shooting::find($id);
    return view('shooting.show', compact('shooting'));
}

    public function create()
    {
        return view('shooting.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'Tel' => 'required',
            'Email' => 'required|email',
            'Designation' => 'required',
            'Date_de_reservation' => 'required|date',
            'Heure_de_debut' => 'required',
            'Journee_du_shooting' => 'required|date',
            'Date_de_livraison' => 'required|date',
        ]);

        Shooting::create($request->all());

        return redirect()->route('shooting.index')
            ->with('success', 'Shooting added successfully');
    }

    public function edit($id)
    {
        $shooting = Shooting::find($id);
        return view('shooting.edit', compact('shooting'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'Tel' => 'required',
            'Email' => 'required|email',
            'Designation' => 'required',
            'Date_de_reservation' => 'required|date',
            'Heure_de_debut' => 'required',
            'Journee_du_shooting' => 'required|date',
            'Date_de_livraison' => 'required|date',
        ]);

        $shooting = Shooting::find($id);
        $shooting->update($request->all());

        return redirect()->route('shooting.index')
            ->with('success', 'Shooting updated successfully');
    }

    public function destroy($id)
    {
        Shooting::destroy($id);

        return redirect()->route('shooting.index')
            ->with('success', 'Shooting deleted successfully');
    }
}