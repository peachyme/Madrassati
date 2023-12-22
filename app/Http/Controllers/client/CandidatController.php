<?php

namespace App\Http\Controllers\client;
use App\Candidat;
use App\Cursu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function index()
    {
        $info_candidat="";
        $nb_candidat = Candidat::where('user_id', auth()->user()->id)->count();
        $candidat = Candidat::where('user_id', auth()->user()->id)->first();
        // dd($candidat->cursus()->first()->annee);
        if ($nb_candidat != 0) {
            $info_candidat = Candidat::where('user_id', auth()->user()->id)->first();
            // dd($info_candidat);
        }
        return view('candidat.monDossier', compact('nb_candidat', 'info_candidat', 'candidat'));
    }


    public function storeCandidat(Request $request)
    {
        $candidat = new Candidat(['nom' => $request->nom , 
                                'prenom' => $request->prenom ,
                              'sexe' => $request->sexe ,
                              'num' => $request->tel,
                              'pays' => $request->pays ,
                              'ddn' => $request->dateNaiss ,
                              'adresse' => $request->adresse ,
                              'ldn' => $request->lieuNaiss,
                              'email' => auth()->user()->email,
                              'user_id' => auth()->user()->id]);

        $file_name = 'identité' . '.' . $request->photo->extension();
        $photo = $request->photo->storeAs('photoes' , $file_name , 'public');
        $candidat->photo = $photo;

        $candidat->save();
        return redirect()->route('candidat.dossier');
    }

    public function storeCursus(Request $request)
    {
        $cursus = new Cursu(['annee' => $request->annee , 
                              'pays' => $request->pays ,
                              'ville' => $request->ville ,
                              'etablissement' => $request->etablissement,
                              'domaine' => $request->domaine ,
                              'niveau' => $request->niveau ,
                              'moyenne' => $request->moyenne,
                            'candidat_id' => auth()->user()->id]);

        $file_name = 'justificatif' . '.' . $request->justificatif->extension();
        $justificatif = $request->justificatif->storeAs('photoes' , $file_name , 'public');
        $cursus->justificatif = $justificatif;

        $candidat = Candidat::where('user_id', auth()->user()->id)->first();
        $candidat->cursus()->save($cursus);
        return redirect()->route('candidat.dossier');
    }
}
