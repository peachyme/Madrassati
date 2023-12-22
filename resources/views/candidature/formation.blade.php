@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <div id="content" class="container pt-5 mt-4">
        <div class="row mb-5 mt-5">
            <div class="col-10">
                <h1 class="text-blue"><strong>> {{$formation->nom}}</strong></h1>
            </div>
            @auth
                <div class="col-2 text-end">
                    <a class="btn btn-blue" data-bs-toggle="modal"
                        data-bs-target="#postulerModal">Postuler pour cette formation</a>
                </div>
                @include('candidature.postuler')
            @else
                <div class="col-2 text-end">
                    <a href="{{ route('login') }}" class="btn btn-blue">Postuler pour cette formation</a>
                </div>
            @endauth
        </div>
        <div class="row mb-5 mt-4">
            <div class="col-sm-4 px-2">
                <div class="card p-4 text-light bg-blue">
                    <div class="card-body">
                        <h6><strong>Type de diplôme :</strong></h6>
                        <h6>{{$formation->type}}</h6>
                        <hr>
                        <h6><strong>Niveau minimum :</strong></h6>
                        <h6>{{$formation->niv_min}}</h6>
                        <hr>
                        <h6><strong>Durée des études :</strong></h6>
                        <h6>{{$formation->duree}} ans</h6>
                        <hr>
                        <h6><strong>Capacité d'accueil :</strong></h6>
                        <h6>{{$formation->capacite}} étudiants</h6>
                        <hr>
                        <h6><strong>Responsable de la formation :</strong></h6>
                        <h6>{{$responsable->nom}}</h6>
                        <hr>
                        <h6><strong>Contact :</strong></h6>
                        <h6><a href="mailto:brahimi.zakaria@hotmail.com" class="text-light">{{$responsable->nom}}</a>
                        </h6>
                        <hr>
                        <h6><strong>Tél :</strong></h6>
                        <h6>0{{$responsable->num}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 px-2">
                <div class="card p-4">
                    <div class="card-body">
                        <h3 class="card-title text-blue mb-4"><strong>> Description</strong></h3>
                        <p> {{$formation->description}}</p>
                        <h3 class="card-title text-blue mb-4"><strong>> Débouchés</strong></h3>
                        <p>{{$formation->debouches}}</p>
                        <h3 class="card-title text-blue mb-4"><strong>> Sessions</strong></h3>
                        @foreach($formation->sessions as $session)
                        <div>
                            <h4> <u>Session :</u>  </h4>
                            <p>La date de debut : {{$session->date_deb}}</p>
                            <p>La date de fin : {{$session->date_fin}}</p>
                            <hr>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
