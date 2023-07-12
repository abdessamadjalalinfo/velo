<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use App\Models\Velo;
use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
    public function deletevelo($id)
    {
        $velo=Velo::find($id);
        foreach($velo->photos()->get() as $photo)
        {
            $photo->delete();
        }
        foreach($velo->locations()->get() as $location)
        {
            $location->delete();
        }
       $velo->delete();
       return back();
    }
    public function voir($id)
    {   $velo=Velo::find($id);
        return view('voir',['velo'=>$velo]);

    }
    public function reserver(Request $request)
    {
        $location = new Location();
        $location->user_id=Auth::user()->id;
        $location->velo_id=$request->velo_id;
        $location->debut=$request->debut;
        $location->fin=$request->fin;
        $location->save();
        return back();
    }

    public function historique()
    {
        $locations=Location::where('user_id',Auth::user()->id)->get();
        //dd($locations);
        return view('historique',['locations'=>$locations]);
    }

    public function indisponible()
    {
    $currentDateTime = Carbon::now();

    $velosLoues = Velo::whereHas('locations', function ($query) use ($currentDateTime) {
            $query->where('debut', '<=', $currentDateTime)
                ->where('fin', '>=', $currentDateTime);
        })
        ->get();

    return view('indisponible', compact('velosLoues'));
    }

    public function utilisateurs()
    {
        $users=User::all();
        return view('users',['users'=>$users]);
        
    }
    
    
}
