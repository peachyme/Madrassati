<!-- Modal -->
<div class="modal fade" id="annulerMaCandidatureModal" tabindex="-1" aria-labelledby="annulerMaCandidatureModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-custom">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-blue" id="annulerMaCandidatureModalLabel"><strong>Annuler ma candidature</strong></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Etes-vous sur de vouloir annuler votre candidature pour la formation blabla ?</h5>
                <form action="" method="POST">
                    @csrf
                    @method('DELETE')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-bs-dismiss="modal">Non</button>
                <button type="submit" class="btn btn-blue">Oui</button>
            </div>
            </form>
        </div>
    </div>
</div>
