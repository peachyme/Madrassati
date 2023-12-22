<!-- Modal -->
<div class="modal fade" id="refuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">Motif de Refus</h3>
            </div>
            <div class="modal-body">
                <!-- form start -->

                <form role="form" class="form-edit-add" action="{{route('voyager.candidature.refuser',[$dataTypeContent->id])}}" method="POST" enctype="multipart/form-data">
                    <!-- CSRF TOKEN -->
                    @csrf
                <div class="form-group  col-md-12 " >                
                    <input type="radio" id="motif1" name="motif" value="dossier invalide">
                    <label for="motif1"> dossier invalide</label><br>
                    <input type="radio" id="motif2" name="motif" value="niveau insuffisant">
                    <label for="motif2"> niveau insuffisant</label><br>
                    <input type="radio" id="motif3" name="motif" value="pas de place disponible">
                    <label for="motif3"> pas de place disponible</label><br>
                </div>
                    <button type="submit" class="btn btn-primary save">Enregistrer</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>