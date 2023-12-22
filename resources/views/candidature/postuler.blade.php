<!-- Modal -->
<div class="modal fade" id="postulerModal" tabindex="-1" aria-labelledby="postulerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content modal-custom">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-blue" id="postulerModalLabel"><strong>Poser ma candidature</strong>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('candidature.store') }}" method="POST" class="border border-blue pt-0 mt-2 mb-2 pb-3">
                    @csrf
                    @method('POST')
                    <!-- Progress bar -->
                    <div class="progressbar mt-4 mx-5">
                        <div class="progress" id="progress"></div>
                        <div class="progress-step progress-step-active text-center" data-title="Formation"></div>
                        <div class="progress-step" data-title="Informations_personnelles"></div>
                        <div class="progress-step" data-title="Cursus"></div>
                    </div>
                    <!-- Steps -->
                    {{-- Formation --}}
                    <div class="form-step form-step-active border-top">
                        <div class="my-5 mx-5 py-3">
                            <div class="row mb-3">
                                <label for="formation" class="col-sm-3 col-form-label"><strong>Formation
                                        :</strong></label>
                                <label for="formation" class="col-sm-9 col-form-label"><strong>{{$formation->nom}}</strong></label>
                            </div>
                            <div class="row mb-3">
                                <label for="formation" class="col-sm-3 col-form-label"><strong>Session
                                        :</strong></label>
                                <div class="col-sm-9">
                                    <select name="session" class="form-select form-control form-control-custom"
                                        aria-label="Default select example" required>
                                        @foreach ($sessions as $session)
                                        <option value="{{ $session->id }}">Du {{ \Carbon\Carbon::parse($session->date_deb)->translatedFormat('d-m-Y')}} au {{ \Carbon\Carbon::parse($session->date_fin)->translatedFormat('d-m-Y')}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="invalid-feedback">
                                    Veuillez remplir ce champ.
                                </div>
                            </div>
                        </div>
                        <div class="btns-group mb-2 mx-5 d-flex justify-content-end">
                            <a href="#" class="btn btn-blue btn-next width-50">Je vérifie mes informations
                                personnelles</a>
                        </div>
                    </div>

                    {{-- Informations personnelles --}}
                    <div class="form-step border-top">
                        <div class="my-4 mx-5">
                            <table class="table table-borderless">
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
                                                <img src="{{ Storage::url($info_candidat->photo) }}" alt="" width="140"
                                                    height="170"></span>
                                        </td>
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
                            <div class="mt-3 mb-4">
                                <a href="{{ route('candidat.dossier') }}" class="btn btn-blue">Modifier</a>
                            </div>
                            <div class="btns-group">
                                <a href="#" class="btn btn-white btn-prev">Je choisis une session</a>
                                <a href="#" class="btn btn-blue btn-next">Je vérifie mon cursus</a>
                            </div>
                        </div>
                    </div>

                    {{-- Cursus --}}
                    <div class="form-step border-top">
                        <div class="px-5 mb-4 mt-4">
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
                                            <a href="{{ route('candidat.dossier') }}" class="btn btn-sm btn-blue">Modifier</a>
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="{{ Storage::url($cursus->justificatif) }}" target='_blank'
                                                class="btn btn-sm btn-blue">Justificatif</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="btns-group mb-2 mx-5">
                            <a href="#" class="btn btn-white btn-prev">Je vérifie mes informations personnelles</a>
                            <input type="submit" value="Valider" class="btn btn-blue" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>