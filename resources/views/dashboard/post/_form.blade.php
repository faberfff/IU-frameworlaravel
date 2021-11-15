@csrf <!-- OBLIGATORIO EN LOS FORMULARIOS PARA EVITAR HACKING NO ETICO -->
@include('dashboard.partials.validation-errors')

<div class="form-group">
    <input type="text" class="form-control" name="publication" id="publication"
        placeholder="Publicación">
</div>

<div class="form-group">
    <textarea name="publication_content" class="form-control" id="publication_content"
    cols="30" rows="10"></textarea>
</div>

<div>
    <a href="" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
