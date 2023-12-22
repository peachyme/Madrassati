<?php

namespace App\Http\Controllers\client;
use App\Candidature;
use App\Candidat;
use App\Entretien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidaturesController extends Controller
{
    public function index()
    {
        $id = Candidat::where('user_id', auth()->user()->id)->first()->id;
        $candidatures = Candidature::where('candidat_id', $id)->get();
        // dd($candidatures);
        return view('candidat.mesCandidatures', compact('candidatures'));
    }

    public function show($id)
    {
        $candidature = Candidature::where('id', $id)->first();
        $entretien = Entretien::where('candidature_id', $id)->first();
        $candidat = Candidat::where('user_id', auth()->user()->id)->first();
        // dd($entretien);
        return view('candidat.maCandidature',
        [
            'candidature' => $candidature,
            'entretien' => $entretien,
            'candidat' => $candidat,
        ]);
    }

    public function store(Request $request)
    {
        $id = Candidat::where('user_id', auth()->user()->id)->first()->id;
        $candidature = new Candidature(['candidat_id' => $id , 
                                'session_id' => $request->session,
                                'etat' => 'reçue']);

        $candidature->save();
        return redirect()->route('candidat.candidatures');
    }
}
