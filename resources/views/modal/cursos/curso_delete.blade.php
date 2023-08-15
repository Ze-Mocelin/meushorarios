
<div class="modal fade" id="modal-delete-{{$cur->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Curso - excluir</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('cursos/delete/'.$cur->id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$cur->id}}" />
                    <p>Deseja realmente excluir este curso: {{$cur -> nomecurso}}</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-outline-light">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>
