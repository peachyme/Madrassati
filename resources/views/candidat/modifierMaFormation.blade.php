<!-- Modal -->
<div class="modal fade" id="modifierMaFormationModal" tabindex="-1" aria-labelledby="modifierMaFormationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-custom">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-blue" id="modifierMaFormationModalLabel"><strong>Modifier la session de ma
                        formation</strong></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-3">
                        <label for="formation" class="col-sm-3 col-form-label"><strong>Formation :</strong></label>
                        <label for="formation" class="col-sm-9 col-form-label">Master mention Informatique parcours Big Data</label>
                    </div>
                    <div class="row mb-3">
                        <label for="formation" class="col-sm-3 col-form-label"><strong>Session :</strong></label>
                        <div class="col-sm-9">
                            <select name="session" class="form-select form-control form-control-custom"
                                aria-label="Default select example" required>
                                {{-- @foreach ($employes as $employe)
                                    <option value="{{ $employe->id }}" @if ($zone->responsable_zone == $employe->id) selected @endif>{{ $employe->matricule }} {{ $employe->nom }} {{ $employe->prenom }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="invalid-feedback">
                            Veuillez remplir ce champ.
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
