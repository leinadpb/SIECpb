<form class="form-horizontal" method='post' action="{{ route('saveEditedProduct', ['id' => $product->id]) }}">
  <div class="form-group">
    <label for="inputTitle" class="col-sm-2 control-label">Título</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="inputTitle" value="{{ $product->name }}" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputType" class="col-sm-2 control-label">Tipo de producto</label>
    <div class="col-sm-10">
      <input name="type" type="text" class="form-control" id="inputType" placeholder="Tipo" value='{{ $product->type }}' required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputShortDes" class="col-sm-2 control-label">Descripción corta</label>
    <div class="col-sm-10">
      <input name="short_des" type="textarea" class="form-control" id="inputShortDes" value="{{ $product->short_des }}" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputLongDes" class="col-sm-2 control-label">Descripción larga</label>
    <div class="col-sm-10">
      <input name='long_des' type="textarea" class="form-control" id="inputLongDes" value="{{ $product->long_des }}" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrice" class="col-sm-2 control-label">Precio aproximado</label>
    <div class="col-sm-10">
      <input name='price' type="text" class="form-control" id="inputPrice" value="{{ $product->price }}" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPlatform" class="col-sm-2 control-label">Plataforma</label>
    <div class="col-sm-10">
      <input name='platform' type="text" class="form-control" id="inputPlatform" value="{{ $product->platform }}" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputChars" class="col-sm-2 control-label">Características</label>
    <div class="col-sm-10">
      <input name='charas' type="text" class="form-control" id="inputChars" value="{{ $product->characteristics }}" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputImageFront" class="col-sm-2 control-label">Imagen de portada</label>
    <div class="col-sm-10">
      <input name='front_image' type="text" class="form-control" id="inputImaageFront" value="{{ $product->front_image }}" required>
    </div>
  </div>

  <?php $num = 2 ?>
  
  @foreach($product->images()->get() as $img)
    <?php $custom_url = 'img_url_' . $num ?>
    <?php $custom_id = 'img_id_' . $num ?>
    <div class='other-images'>
      <div class="form-group">
        <label for="inputImageSecond" class="col-sm-2 control-label">Modificar imagen de la galería</label>
        <div class="col-sm-10">
          <input name='{{ $custom_url }}' type="text" class="form-control" id="inputImageSecond" placeholder="Imagen opcional" value='{{ $img->url }}'>
          <input type='hidden' name='{{ $custom_id }}' type="text" class="form-control" value='{{ $img->id }}'>
        </div>
      </div>
    </div>

    <?php $num = $num + 1 ?>

  @endforeach
  <div class="form-group">
    <label for="inputUrl" class="col-sm-2 control-label">Direccion web</label>
    <div class="col-sm-10">
      <input name='product_url' type="text" class="form-control" id="inputUrl" value="{{ $product->product_url }}" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputOwner" class="col-sm-2 control-label">Propietario</label>
    <div class="col-sm-10">
      <input name='product_owner' type="text" class="form-control" id="inputOwner" value="{{ $product->product_owner }}" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputCreator" class="col-sm-2 control-label">Creado por</label>
    <div class="col-sm-10">
      <input name="product_creator" type="text" class="form-control" id="inputCreator" value="{{ $product->product_creator }}" required>
    </div>
  </div>
  <input type="hidden" name="id" value='{{ $product->id }}'>
  {{ csrf_field() }}
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Modificar</button>
    </div>
  </div>
</form>