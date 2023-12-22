@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <div id="content" class="container mt-5 pt-5">
        <div class="card ps-4 pt-2 mt-4">
            <div class="card-body">
                <h3 class="card-title text-blue"><strong>> Mes candidatures</strong></h3>
            </div>
        </div>
        <div class="card p-3 mt-5">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="text-blue">
                        <tr>
                            <th scope="col">N° Candidature</th>
                            <th scope="col">Date dépôt</th>
                            <th scope="col">Etat Candidature</th>
                            <th scope="col" class="col-4">Formation</th>
                            <th scope="col" class="col-1"></th>
                            <th scope="col" class="col-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach ($candidatures as $candidature)
                        @php
                        $i=$i+1;
                        @endphp
                        <tr>
                            <td scope="row" class="text-blue">Candidature n° {{$i}}</td>
                            <td>{{\Carbon\Carbon::parse($candidature->created_at)->translatedFormat('d-m-Y')}}</td>
                            <td>{{$candidature->etat}}</td>
                            <td>{{$candidature->session->formation->nom}}</td>
                            <td><a href="{{ route('candidat.candidature', $candidature->id) }}" class="btn btn-sm btn-blue">Consulter</a></td>
                            <td><a class="btn btn-sm btn-blue"
                                    data-bs-toggle="modal" data-bs-target="#annulerMaCandidatureModal">Annuler</a></td>
                            @include('candidat.annulerMaCandidature')
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
