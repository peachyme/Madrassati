@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <div class="main text-center">
        <div class="pt-10 pb-3" id="hide1">
            <h1 class="text-white"><strong>Bienvenue sur la plateforme</strong></h1>
        </div>
        <div class="pt-5 pb-4" id="hide2">
            <span><img src="/images/logoo.png" alt="" width="270" height="60"></span>
        </div>
        <div class="pt-5 pb-3" id="hide3">
            <h3 class="text-white"><strong>Vous recherchez une formation ?</strong></h3>
        </div>
        <div class="arrow pt-5 pb-5 trans" id="hide4"><a href="#content"><img src="/images/arrow-down.png"
                    alt="" width="50" height="50" class="rounded-circle"></a></div>
    </div>
    <div id="content" class="container pt-5">
        <h1 class="primary mt-5 mb-5 text-blue"><strong>NOS FORMATIONS PAR TYPE DE DIPLOME</strong></h1>
        <div class="row mb-5">
            <div class="col-sm-6 px-4">
                <div class="card card-formation p-4">
                    <div class="card-body">
                        <h3 class="card-title text-blue"><strong>> Masters</strong></h3>
                        <ul class="list-group list-group-flush ps-2">
                            @foreach ($formations_master as $formation)
                                <li class="list-group-item"><a href="{{ route('formation', $formation->id) }}" class="text-decoration-none item">{{ $formation->nom }}</a></li>    
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
                <div class="col-sm-6 px-4">
                    <div class="card card-formation p-4">
                        <div class="card-body">
                            <h3 class="card-title text-blue"><strong>> Licences</strong></h3>
                            <ul class="list-group list-group-flush ps-2">
                            @foreach ($formations_licence as $formation)
                                <li class="list-group-item"><a href="{{ route('formation', $formation->id) }}" class="text-decoration-none item">{{ $formation->nom }}</a></li>    
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-6 px-4">
                    <div class="card card-formation p-4">
                        <div class="card-body">
                            <h3 class="card-title text-blue"><strong>> Diplôme d'ingénieur</strong></h3>
                            <ul class="list-group list-group-flush ps-2">
                            @foreach ($formations_ingenieur as $formation)
                                <li class="list-group-item"><a href="{{ route('formation', $formation->id) }}" class="text-decoration-none item">{{ $formation->nom }}</a></li>    
                            @endforeach
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 px-4">
                    <div class="card card-formation p-4">
                        <div class="card-body">
                            <h3 class="card-title text-blue"><strong>> Métiers de la santé</strong></h3>
                            <ul class="list-group list-group-flush ps-2">
                            @foreach ($formations_sante as $formation)
                                <li class="list-group-item"><a href="{{ route('formation', $formation->id) }}" class="text-decoration-none item">{{ $formation->nom }}</a></li>    
                            @endforeach
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
