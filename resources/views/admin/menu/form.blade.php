<div class="form-group">
    <label for="nombre" class="col-sm-3 control-label requerido">Nombre</label>

    <div class="col-sm-9">
    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required value="{{old('nombre')}}">
    </div>
</div>
<div class="form-group">
    <label for="url" class="col-sm-3 control-label requerido">Url</label>

    <div class="col-sm-9">
        <input type="text" name="url" class="form-control" id="url" placeholder="Url" required value="{{old('url')}}">
    </div>
</div>
<div class="form-group">
    <label for="icono" class="col-sm-3 control-label">Icono</label>

    <div class="col-sm-9">
        <input type="text" name="icono" class="form-control" id="icono" placeholder="Icono" value="{{old('icono')}}">
    </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
    <div class="col-sm-3"></div>
    <div class="col-sm-9">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-success">Guardar</button>

    </div>
</div>
<!-- /.box-footer -->