<?php

namespace App\Http\Controllers;

use App\Models\Velo;
use Illuminate\Http\Request;

class VeloController extends Controller
{
    public function liste_velo()
    {
        return view('liste_velo');
    }
    public function store(Request $request)
    {
        $velo = Velo::create($request->only(['marque', 'adresse', 'zip', 'description', 'pays']));

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('photos');
                $velo->photos()->create(['chemin' => $path]);
            }
        }

        return redirect()->back()->with('success', 'Enregistrement du vélo réussi !');
    }
}
