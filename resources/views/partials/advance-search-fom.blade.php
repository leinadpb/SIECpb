<div class="collapse" id="search-advanced-form">
	<div class="well">
		<div><h4>Búsqueda avanzada</h4></div>
		<hr>
    <form class="form-horizontal" method='get' action='{{ route("search-advanced") }}'>
    	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingOne">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		          Por nombre
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		        <input name='byName' type="text" class="form-control" placeholder="Text input">
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingTwo">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Por precio (US$)
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		      <div class="panel-body">
		        <div class='form-inline row'>
			        <div class="form-group col-md-3">
					    <label class="sr-only" for="exampleInputAmount">Precio (en dólares)</label>
					    <div class="input-group">
					      <div class="input-group-addon">$</div>
					      <input name='minPrice' type="number" min='0' class="form-control" id="exampleInputAmount" placeholder="Precio mínimo">
					      <div class="input-group-addon">.00</div>
					    </div>
					  </div><div class='col-md-1'></div>
					  <div class="form-group col-md-3">
					    <label class="sr-only" for="exampleInputAmount">Precio (en dólares)</label>
					    <div class="input-group">
					      <div class="input-group-addon">$</div>
					      <input name='maxPrice' type="number" min='0' class="form-control" id="exampleInputAmount" placeholder="Precio máximo">
					      <div class="input-group-addon">.00</div>
					    </div>
					  </div>
				</div>
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingThree">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Por plataforma
		        </a>
		      </h4>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">
		        <select name='platform' class="form-control">
		        	<option selected>Todas</option>
		        	<option>Angular</option>
		        	<option>Laravel</option>
		        	<option>ionic</option>
		        	<option>Ruby on Rails</option>
		        	<option>Symfony</option>
		        	<option>React</option>
		        	<option>React.js</option>
		        	<option>Python</option>
		        	<option>Vue.js</option>
		        	<option>Meteor</option>

		        </select>
		      </div>
		    </div>
		  </div>
		</div>
		<hr>
    	<div class="form-group">
	    <div class="col-sm-10">
	      <button type="submit" class="btn btn-primary">Buscar</button>
	    </div>
	  </div>
	</form>
  </div>
</div>