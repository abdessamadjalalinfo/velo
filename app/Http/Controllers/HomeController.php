<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Velo;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$velos = Velo::with('photos')->get();
        $currentDateTime = Carbon::now();
        $velos = Velo::whereDoesntHave('locations', function ($query) use ($currentDateTime) {
            $query->where('debut', '<=', $currentDateTime)
                ->where('fin', '>=', $currentDateTime);
        })
        ->get();

        return view('home',compact('velos'));
    }
}
