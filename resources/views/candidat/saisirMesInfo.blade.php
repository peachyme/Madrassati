<!-- Modal -->
<div class="modal fade" id="saisirMesInfoModal" tabindex="-1" aria-labelledby="saisirMesInfoModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modal-custom">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-blue" id="saisirMesInfoModalLabel"><strong>Saisir mes information personnelles                        cursus</strong></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('candidat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row mb-3">
                        <label for="nom" class="col-sm-5 col-form-label">Nom :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-custom" id="nom" name="nom" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="prenom" class="col-sm-5 col-form-label">Prénom :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-custom" id="prenom" name="prenom" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sexe" class="col-sm-5 col-form-label">Sexe :</label>
                        <div class="col-sm-7">
                            <select name="sexe" class="form-select form-control form-control-custom"
                                aria-label="Default select example" required>
                                {{-- @if ($zone->responsable_zone == $employe->id) selected @endif --}}
                                <option value=""></option>
                                <option value="F">Féminin</option>
                                <option value="M">Masculin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dateNaiss" class="col-sm-5 col-form-label">Date de naissance :</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control form-control-custom" id="dateNaiss" name="dateNaiss" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pays" class="col-sm-5 col-form-label">Pays de naissance :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-custom" id="pays" name="pays" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lieuNaiss" class="col-sm-5 col-form-label">Lieu de Naissance :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-custom" id="lieuNaiss"
                                name="lieuNaiss" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="adresse" class="col-sm-5 col-form-label">Adresse :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-custom" id="adresse" name="adresse" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tel" class="col-sm-5 col-form-label">Tél :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-custom" id="tel"
                                name="tel" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="photo" class="col-sm-5 col-form-label">Photo d'identité :</label>
                        <div class="col-sm-7">
                            <input type="file" class="form-control form-control-custom" id="photo" name="photo" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-blue">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
