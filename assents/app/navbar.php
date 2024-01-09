<div class="vortex-navbar">
	<nav class="navbar navbar-expand-sm navbar-dark">
	  <div class="container">

	    <a class="navbar-brand" href="<?php echo $flow ?>"><img width="40px" src="<?php echo $flow ?>assents/img/logo/64x64Orange.png"></a>

	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse justify-content-end" id="nav">
	    	<ul class="navbar-nav">
				<a href="<?php echo $flow ?>" class="item_nav">Pagina Principal</a>
		    	<button data-bs-toggle="modal" data-bs-target="#myModal" class="item_nav btn btn-vortex">
		    		<i class="fa-regular fa-user"></i>
		    		Entrar
		    	</button>
	    	</ul>
	    </div>
	  </div>
	</nav>
</div>

<style type="text/css">
	.vortex-navbar{
		background-color: black;
	}
	.item_nav{
		display: block;
  		padding: 0.5rem 1rem;
		text-decoration: none;
		color: #fff;
		font-size: 13px;
	}
	.item_nav:hover{
		transition: 300ms;
		text-decoration: none;
		color: #c2c2c2;
	}
	.btn-vortex{
		background-color: #ff8c00;
	}
</style>

<div class="modal fade modal-login" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
      	<button type="button" class="btn-close float-rigth" data-bs-dismiss="modal"></button>
      	<br>
      	<hr>
        <center>
        	<h4 class="title-login">Entrar</h4>
        	<br>
        	<div class="group-inputs">
        		<label class="title-input">Email</label>
        		<input type="text" class="form-control form-login" name="">
        	</div>
        	<div class="group-inputs">
        		<label class="title-input">Email</label>
        		<input type="text" class="form-control form-login" name="">
        	</div>
        	<div class="group-inputs">
        		<button class="btn btn-login">Acessar</button>
        	</div>
        	<hr>
        	<div class="group-inputs">
        		<button class="btn btn-social"><i class="fi fi-brands-twitch"></i></button>
        		<button class="btn btn-social"><i class="fi fi-brands-facebook"></i></button>
        		<button class="btn btn-social"><i class="fi fi-brands-discord"></i></button>
        	</div>
        	<hr>
        	<div class="group-inputs">
        		<a href="#" class="links-login">Não tenho um conta ainda.</a>
        	</div>
        </center>
      </div>

    </div>
  </div>
</div>