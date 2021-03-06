﻿<form role="form" action="<?php echo base_url('index.php/usuario/create'); ?>" method="post">

	<div class="page-header">
		<h2><?php echo $headline ?></h3>
	</div>
	
	<div class="panel panel-primary">
		<div class="panel-body">	
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="login">Login</label>
			    	<input type="text" id="login" name="login" class="form-control" placeholder="Login" required autofocus>
			    </div>
			    
			    <div class="form-group col-sm-4">
			    	<label for="password">Senha</label>
			    	<input type="password" id="password" name="senha" class="form-control" placeholder="Senha" required>
			    </div>
		    </div>
  
		    <div class="row">
			    <div class="form-group col-sm-4">
			    	<label for="perfil">Perfil</label>
				    <select name="perfil" class="form-control" required>
				    	<option value="">Escolha um perfil</option>
					    <?php 
						    foreach($perfis->result() as $perfil):
								echo ('<option value="'.$perfil->id_perfil.'">'.$perfil->nome_perfil.'</option>');
							endforeach;
						?>
				    </select>
				</div>
			</div>
		</div>
		<div class="panel-footer">
    		<button type="submit" class="btn btn-primary">Cadastrar</button>
    		<button type="reset" class="btn btn-default">Limpar</button>
	    </div>
	</div>
</form>
