<?php

namespace App\Http\Controllers;
use App\Formation;
use App\Responsable;
use App\Candidat;
use App\Cursu;
use App\Session;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $formations_master = Formation::where('type','master')->get();
        $formations_licence = Formation::where('type','licence')->get();
        $formations_ingenieur = Formation::where('type','ingenieur')->get();
        $formations_sante = Formation::where('type','sante')->get();
        return view('accueil', 
            [
                'formations_master' => $formations_master,
                'formations_licence' => $formations_licence,
                'formations_ingenieur' => $formations_ingenieur,
                'formations_sante' => $formations_sante,
            ]);
    }

    public function show($id)
    {
        $info_candidat="";
        $formation = Formation::where('id', $id)->first();
        $responsable = Responsable::where('id', $formation->Responsable_id)->first();
        // dd($formation->Responsable);
        $nb_candidat = Candidat::where('user_id', auth()->user()->id)->count();
        $candidat = Candidat::where('user_id', auth()->user()->id)->first();
        if ($nb_candidat != 0) {
            $info_candidat = Candidat::where('user_id', auth()->user()->id)->first();
            // dd($info_candidat);
        }
        $sessions = Session::where('formation_id', $id)->get();
        return view('candidature.formation', 
        [
            'formation' => $formation,
            'responsable' => $responsable,
            'nb_candidat' => $nb_candidat,
            'info_candidat' => $info_candidat,
            'candidat' => $candidat,
            'sessions' => $sessions,
        ]);
    }
}
