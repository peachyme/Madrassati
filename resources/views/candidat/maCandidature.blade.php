@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <div id="content" class="container mt-5 pt-5">
        <div class="card ps-4 pt-2 mt-4">
            <div class="card-body">
                <h3 class="card-title text-blue"><strong>> Ma candidature</strong></h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card p-3 pb-0">
                    <div class="card-body">
                        <h4><strong>Ma formation :</strong></h4>
                        <hr class="text-blue">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-blue col-2">Formation :</th>
                                    <td>{{$candidature->session->formation->nom}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-blue">Session :</th>
                                    <td>Du {{ \Carbon\Carbon::parse($candidature->session->date_deb)->translatedFormat('d-m-Y')}} au {{ \Carbon\Carbon::parse($candidature->session->date_fin)->translatedFormat('d-m-Y')}}</td>
                                </tr>
                                <tr>
                                    <td class="pt-4">
                                        <button type="button" class="btn btn-blue" data-bs-toggle="modal"
                                            data-bs-target="#modifierMaFormationModal">Modifier</button>
                                    </td>
                                    @include('candidat.modifierMaFormation')
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 pt-1" style="height: 300px">
                    <div class="card-body">
                        <div class="wizard">
                            <div class="v-line"></div>
                            @if ($candidature->etat == "reçue")
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-blue"></i>
                                <span class="badge bg-blue text-wrap">Candidature envoyée</span>
                            </div>
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-gray"></i>
                                <span class="badge bg-gray text-wrap">Candidature validée</span>
                            </div>
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-gray"></i>
                                <span class="badge bg-gray text-wrap">Candidature acceptée</span>
                            </div>
                            @endif
                            @if ($candidature->etat == "valider")
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-gray"></i>
                                <span class="badge bg-gray text-wrap">Candidature envoyée</span>
                            </div>
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-blue"></i>
                                <span class="badge bg-blue text-wrap">Candidature validée</span>
                            </div>
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-gray"></i>
                                <span class="badge bg-gray text-wrap">Candidature acceptée</span>
                            </div>
                            @endif
                            @if ($candidature->etat == "accepter")
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-gray"></i>
                                <span class="badge bg-gray text-wrap">Candidature envoyée</span>
                            </div>
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-gray"></i>
                                <span class="badge bg-gray text-wrap">Candidature validée</span>
                            </div>
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-blue"></i>
                                <span class="badge bg-blue text-wrap">Candidature acceptée</span>
                            </div>
                            @endif
                            @if ($candidature->etat == "refuser")
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-gray"></i>
                                <span class="badge bg-gray text-wrap">Candidature envoyée</span>
                            </div>
                            <div class="step">
                                <i class="fa-solid fa-circle-check text-blue"></i>
                                <span class="badge bg-blue text-wrap">Candidature refusée</span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card ps-4 pt-2 mt-4">
            <div class="card-body">
                <h4><strong>Mon entretien :</strong></h4>
                <hr class="text-blue">
                <table class="table table-borderless">
                    <tbody>
                        @if($entretien == null)
                        <p>Entreiten non encore programmé</p>
                        @else
                        <tr>
                            <th scope="row" class="text-blue">Date entretien :</th>
                            <td>Le {{\Carbon\Carbon::parse($entretien->date)->translatedFormat('d-m-Y')}}</td>
                            <th scope="row" class="text-blue">Heure entretien :</th>
                            <td>{{\Carbon\Carbon::parse($entretien->heure)->format('H:i')}}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-blue">Lieu entretien :</th>
                            <td>{{$entretien->lieu}}</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card p-3 mt-4 mb-5">
            <div class="card-body">
                <h4><strong>Mon cursus :</strong></h4>
                <hr class="text-blue">
                <table class="table table-striped">
                    <tbody>
                        @if ($candidat->cursus()->exists())
                                    @foreach($candidat->cursus()->get() as $cursus)
                                    <tr>
                                        <th scope="row" class="col-1 text-center">{{$cursus->annee}}</th>
                                        <td>{{$cursus->domaine}} <br> {{$cursus->niveau}}</td>
                                        <td>Moyenne : {{$cursus->moyenne}}</td>
                                        <td>{{$cursus->etablissement}}, {{$cursus->ville}}, {{$cursus->pays}}</td>
                                        
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-sm btn-blue" data-bs-toggle="modal"
                                                data-bs-target="#modifierMonCursusModal">Modifier</button>
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="{{ Storage::url($cursus->justificatif) }}" target='_blank'
                                                class="btn btn-sm btn-blue">Justificatif</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                        @include('candidat.modifierMonCursus')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
