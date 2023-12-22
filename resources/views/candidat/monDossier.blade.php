@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <div id="content" class="container mt-5 pt-5">
        <div class="card ps-4 pt-2 mt-4">
            <div class="card-body">
                <h3 class="card-title text-blue"><strong>> Mon dossier</strong></h3>
            </div>
        </div>
        <div class="card p-3 pb-0 mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4><strong>Mes informations personnelles :</strong></h4>
                    </div>
                    <div class="col d-flex justify-content-end">
                        @if($nb_candidat == 0)
                            <button type="button" class="btn btn-blue" data-bs-toggle="modal"
                            data-bs-target="#saisirMesInfoModal">Saisir mes informations personnelles</button>
                        @else
                            <button type="button" class="btn btn-blue" data-bs-toggle="modal"
                            data-bs-target="#modifierMesInfoModal">Modifier</button>
                        @endif
                    </div>
                </div>
                @include('candidat.modifierMesInfo')
                @include('candidat.saisirMesInfo')
                <table class="table table-borderless my-4">
                    @if($nb_candidat == 0)
                    <tbody>
                        <tr>
                            <td scope="row" class="text-blue">Nom :</td>
                            <td><strong></strong></td>
                            <td scope="row" class="text-blue">Prénom :</td>
                            <td><strong></strong></td>
                            <td scope="row" rowspan="4" class="text-center col-2"></td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-blue">Sexe :</td>
                            <td><strong></strong></td>
                            <td scope="row" class="text-blue">Date de naissance :</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-blue">Pays de naissance :</td>
                            <td><strong></strong></td>
                            <td scope="row" class="text-blue">Lieu de naissance :</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-blue">Adresse :</td>
                            <td><strong></strong></td>
                            <td scope="row" class="text-blue">Tél :</td>
                            <td><strong></strong></td>
                        </tr>
                    </tbody>
                        @else
                    <tbody>
                        <tr>
                            <td scope="row" class="text-blue">Nom :</td>
                            <td><strong>{{$info_candidat->nom}}</strong></td>
                            <td scope="row" class="text-blue">Prénom :</td>
                            <td><strong>{{$info_candidat->prenom}}</strong></td>
                            <td scope="row" rowspan="4" class="text-center col-2">
                                <span>
                                    <img src="{{ Storage::url($info_candidat->photo) }}" alt="" width="140" height="170"></span></td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-blue">Sexe :</td>
                            <td><strong>{{$info_candidat->sexe}}</strong></td>
                            <td scope="row" class="text-blue">Date de naissance :</td>
                            <td><strong>{{$info_candidat->ddn}}</strong></td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-blue">Pays de naissance :</td>
                            <td><strong>{{$info_candidat->pays}}</strong></td>
                            <td scope="row" class="text-blue">Lieu de naissance :</td>
                            <td><strong>{{$info_candidat->ldn}}</strong></td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-blue">Adresse :</td>
                            <td><strong>{{$info_candidat->adresse}}</strong></td>
                            <td scope="row" class="text-blue">Tél :</td>
                            <td><strong>{{$info_candidat->num}}</strong></td>
                        </tr>
                    </tbody>
                        @endif
                </table>
            </div>
        </div>
        <div class="card p-3 mt-4 mb-5">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4><strong>Mon cursus :</strong></h4>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button type="button" class="btn btn-blue" data-bs-toggle="modal"
                            data-bs-target="#ajouterAMonCursusModal">Ajouter une année d'études</button>
                        @include('candidat.ajouterAMonCursus')
                    </div>
                </div>
                <hr class="text-blue">
                <table class="table table-striped">
                    <tbody>
                        @if($candidat != null)
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
                                <a href="{{ Storage::url($cursus->justificatif) }}" target='_blank' class="btn btn-sm btn-blue">Justificatif</a>
                            </td>
                        </tr>
                        @endforeach
                        @include('candidat.modifierMonCursus')
                        @endif
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
