<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wedding;

class WeddingController extends Controller
{
    public function index()
    {
        $weddings = Wedding::all();
        return view('wedding.index', compact('weddings'));
    }
    public function show($id)
{
    $wedding = wedding::find($id);
    return view('wedding.show', compact('wedding'));
}

   

    public function create()
    {
        return view('wedding.create');
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

        Wedding::create($request->all());

        return redirect()->route('wedding.index')
            ->with('success', 'Wedding added successfully');
    }

    public function edit($id)
    {
        $wedding = Wedding::find($id);
        return view('wedding.edit', compact('wedding'));
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

        $wedding = Wedding::find($id);
        $wedding->update($request->all());

        return redirect()->route('wedding.index')
            ->with('success', 'Wedding updated successfully');
    }

    public function destroy($id)
    {
        Wedding::destroy($id);

        return redirect()->route('wedding.index')
            ->with('success', 'Wedding deleted successfully');
    }
}