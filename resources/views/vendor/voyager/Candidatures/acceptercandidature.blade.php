<!-- Modal -->
<div class="modal fade" id="accepter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">Accepter candidature</h3>
                
            </div>
            <div class="modal-body">
                <!-- form start -->
                <h5>etes vous sur de vouloir accepter cette candidature ?</h5>
                <button>
                      <a href="{{route('voyager.candidature.accepter',[$dataTypeContent->id])}}">Accepter</a>
                </button>
                
            </div>
        </div>
    </div>
</div>