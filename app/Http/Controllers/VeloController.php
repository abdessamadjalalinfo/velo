<?php

namespace App\Http\Controllers;

use App\Models\Velo;
use Illuminate\Http\Request;
use App\Models\Photo;

class VeloController extends Controller
{
    public function ajouter_velo()
    {
        return view('ajouter_velo');
    }
    public function store(Request $request)
    {
        $velo = Velo::create($request->only(['marque', 'adresse', 'zip', 'description', 'pays']));

        if ($request->hasFile('photos')) {
            $filename = time() . '.' . $request->photos->extension();

              $request->photos->move(public_path('images'), $filename);
              $photo= new Photo();
              $photo->velo_id=$velo->id;
              $photo->chemin=$filename;
              $photo->save();
        }

        return redirect()->back()->with('success', 'Enregistrement du vélo réussi !');
    }
}
