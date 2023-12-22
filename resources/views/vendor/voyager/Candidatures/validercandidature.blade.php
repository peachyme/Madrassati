<!-- Modal -->
<div class="modal fade" id="valider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">Enregistrer un entretien</h3>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form role="form" class="form-edit-add" action="{{route('voyager.candidature.valider',[$dataTypeContent->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="panel-body">
                        <div class="form-group  col-md-12 ">
                            <label class="control-label" for="name">Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" value="">
                        </div>

                        <div class="form-group  col-md-12 ">
                            <label class="control-label" for="name">Heure</label>
                            <input type="time" data-name="Heure" class="form-control" name="heure" placeholder="Heure" value="">
                        </div>

                        <div class="form-group  col-md-12 ">
                            <label class="control-label" for="name">Lieu</label>
                            <input type="text" class="form-control" name="Lieu" placeholder="Lieu" value="">
                        </div>
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