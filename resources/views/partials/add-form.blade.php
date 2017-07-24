<form class="form-horizontal" method='post' action="{{ route('saveProduct') }}">
  <div class="form-group">
    <label for="inputTitle" class="col-sm-2 control-label">Título</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="inputTitle" placeholder="Título" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputShortDes" class="col-sm-2 control-label">Descripción corta</label>
    <div class="col-sm-10">
      <input name="short_des" type="textarea" class="form-control" id="inputShortDes" placeholder="Extracto" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputLongDes" class="col-sm-2 control-label">Descripción larga</label>
    <div class="col-sm-10">
      <input name='long_des' type="textarea" class="form-control" id="inputLongDes" placeholder="Descripción larga" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrice" class="col-sm-2 control-label">Precio aproximado</label>
    <div class="col-sm-10">
      <input name='price' type="text" class="form-control" id="inputPrice" placeholder="Price" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPlatform" class="col-sm-2 control-label">Plataforma</label>
    <div class="col-sm-10">
      <input name='platform' type="text" class="form-control" id="inputPlatform" placeholder="Plataforma" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputChars" class="col-sm-2 control-label">Características</label>
    <div class="col-sm-10">
      <input name='charas' type="text" class="form-control" id="inputChars" placeholder="Separadas por una coma ( , )" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputImageFront" class="col-sm-2 control-label">Imagen de portada</label>
    <div class="col-sm-10">
      <input name='front_image' type="text" class="form-control" id="inputImaageFront" placeholder="Imagen" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputUrl" class="col-sm-2 control-label">Direccion web</label>
    <div class="col-sm-10">
      <input name='product_url' type="text" class="form-control" id="inputUrl" placeholder="Url" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputOwner" class="col-sm-2 control-label">Propietario</label>
    <div class="col-sm-10">
      <input name='product_owner' type="text" class="form-control" id="inputOwner" placeholder="Propietario" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputCreator" class="col-sm-2 control-label">Creado por</label>
    <div class="col-sm-10">
      <input name="product_creator" type="text" class="form-control" id="inputCreator" placeholder="Creado por" required>
    </div>
  </div>
  {{ csrf_field() }}
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Agregar</button>
    </div>
  </div>
</form>