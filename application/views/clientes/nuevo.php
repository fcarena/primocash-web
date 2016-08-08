<nav class="green lighten-1">
	<div class="nav-wrapper">
	  <div class="col s12">
	    <a href="panel" class="breadcrumb">Inicio</a>
	    <a href="<?= base_url() ?>clientes" class="breadcrumb">Clientes</a>
	    <a href="#!" class="breadcrumb">Nuevo</a>
	  </div>
	</div>
</nav>
<section class="container">
	<div class="row">
		<h4 class="green-text text-darken-2">Nuevo cliente</h4>
	</div>
	<form action="insertar" method="post">
		<div class="row">
			<div class="input-field col s12 m6">
	          <input id="name" name="name" type="text" class="validate" required>
	          <label for="name">Nombre completo</label>
	        </div>
	        <div class="input-field col s12 m6">
	          <input id="email" name="email" type="text" class="validate" required>
	          <label for="email">Email</label>
	        </div>
		</div>
        <div class="row">
	        <div class="input-field col s12">
	          <input type="submit" class="btn-large green col s12">
	        </div>
        </div>
	</form>
</section>