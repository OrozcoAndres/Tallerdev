<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->

{{Form::Open(array('action'=>array('App\http\Controllers\PersonaController@destroy',$per->id),'method'=>'delete'))}}
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>CONFIRME SI DESEAS ELIMINAR LA PERSONA</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Confirmar</button>
        <button type="button" class="btn btn-primary">Cancelar | Cerrar</button>
      </div>
    </div>
  </div>
</div> {{Form::Close()}}



<div class="modal fade modal-slide-in-right"aria-hidden="true"
role="dialog"tabindex="-1"
id="modal-delete-{{$per->id}}">
{{Form::Open(array('action'=>array('App\http\Controllers\PersonaController@destroy',$per->id),
    'method'=>'delete'))}}
    <div class="modal-dialog"role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar Persona</h5>
                <button type="button"class="close"data-dismiss="modal"
                aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
    <p>Confirme si desea Eliminar La Persona</p>
</div>
<div class="modal-footer">
    <button type="submit"class="btn btn-primary">Confirmar</button>
    <button type="button"class="btn btn-secondary"data-dismiss="modal">Cerrar</button>
</div>
</div>
</div>
</div>
{{Form::Close()}}