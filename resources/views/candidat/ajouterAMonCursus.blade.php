<!-- Modal -->
<div class="modal fade" id="ajouterAMonCursusModal" tabindex="-1" aria-labelledby="ajouterAMonCursusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modal-custom">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-blue" id="ajouterAMonCursusModalLabel"><strong>Ajouter une année d'étude à mon cursus</strong></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('candidat.storeCursus') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row mb-3">
                        <label for="annee" class="col-sm-4 col-form-label">Année :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-custom" id="annee" name="annee"
                                value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pays" class="col-sm-4 col-form-label">Pays :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-custom" id="pays" name="pays"
                                value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ville" class="col-sm-4 col-form-label">Ville :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-custom" id="ville" name="ville"
                                value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="etablissement" class="col-sm-4 col-form-label">Etablissement :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-custom" id="etablissement"
                                name="etablissement" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="domaine" class="col-sm-4 col-form-label">Domaine :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-custom" id="domaine" name="domaine"
                                value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="niveau" class="col-sm-4 col-form-label">Niveau :</label>
                        <div class="col-sm-8">
                            <select name="niveau" class="form-select form-control form-control-custom"
                                aria-label="Default select example" required>
                                {{-- @if ($zone->responsable_zone == $employe->id) selected @endif --}}
                                <option value=""></option>
                                <option value="bac">Bac</option>
                                <option value="bac+1">Bac +1</option>
                                <option value="bac+2">Bac +2</option>
                                <option value="bac+3">Bac +3</option>
                                <option value="bac+4">Bac +4</option>
                                <option value="bac+5">Bac +5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="moyenne" class="col-sm-4 col-form-label">Moyenne :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-custom" id="moyenne" name="moyenne"
                                value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="justificatif" class="col-sm-4 col-form-label">Justificatif :</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control form-control-custom" id="justificatif" name="justificatif" required>
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
