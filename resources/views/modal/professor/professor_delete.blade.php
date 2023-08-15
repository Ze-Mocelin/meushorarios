<div class="modal fade" id="modal-delete-{{$prof->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Professor - excluir</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('professores/delete/'.$prof->id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$prof->id}}" />
                    <p>Deseja realmente excluir este professor: {{$prof -> nome}}</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-outline-light">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>
