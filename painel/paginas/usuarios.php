<?php 
$pag = 'usuarios';
 ?>
<a onclick="inserir()" type="button" class="btn btn-primary"><span class="fa fa-plus"></span> Usuário</a>



<li class="dropdown head-dpdn2" style="display: inline-block;">		
		<a href="#" data-toggle="dropdown"  class="btn btn-danger dropdown-toggle" id="btn-deletar" style="display:none"><span class="fa fa-trash-o"></span> Deletar</a>

		<ul class="dropdown-menu">
		<li>
		<div class="notification_desc2">
		<p>Excluir Selecionados? <a href="#" onclick="deletarSel()"><span class="text-danger">Sim</span></a></p>
		</div>
		</li>										
		</ul>
</li>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">

</div>


<input type="hidden" id="ids">

<!-- Modal Perfil -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -25px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="form" class="needs-validation" novalidate>
			<div class="modal-body">
				

					<div class="row">
						<div class="col-md-6">							
								<label>Nome</label>
								<input type="text" class="form-control" id="nome" name="nome" placeholder="Seu Nome" required>							
						</div>

						<div class="col-md-6">							
								<label>Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Seu Email"  required>							
						</div>

						
					</div>


					<div class="row">

						<div class="col-md-6">							
								<label>Telefone</label>
								<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Seu Telefone" required>							
						</div>
						

						<div class="col-md-6">							
								<label>Nível</label>
								<select class="form-control" name="nivel" id="nivel">
								  <option>Administrador</option>
								  <option>Comum</option>
								</select>							
						</div>


						
					</div>

					<div class="row">
						
						<div class="col-md-12">							
						<label for="cpf">CPF</label>
								<!--<input type="text" min="1" step="1" data-id="cpf"  name="cpf" id="cpf" placeholder="Seu CPF" class="form-control" maxlength="11" onblur="return verificarCPF(this.value)"  required></input>-->
								<!--<input type="text" class="form-control" data-id="cpf" name="cpf" id="cpf" placeholder="Seu CPF" maxlength="14" required onBlur="formatar('###.###.###-##', this);" />-->
								<input type="text" class="form-control is-invalid" data-id="cpf" name="cpf" id="cpf" placeholder="Seu CPF" maxlength="14" required>
						</div>
						
					</div>	
					
<script>
  $("#cpf").on("blur", function(){
      let cpf_value = $(this).val();
    
      if(jsbrasil.validateBr.cpf(cpf_value)) {
          //alert("CPF Válido");
		  document.getElementById("botao").disabled = false;
      } else {
    	  alert("Adiciona um CPF valido para salvar");
		  document.getElementById("botao").disabled = true;
      }
  });
</script>

					<div class="row">

						<div class="col-md-12">							
								<label>Endereço</label>
								<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Seu Endereço" >							
						</div>
					</div>

					


					


					<input type="hidden" class="form-control" id="id" name="id">					

				<br>
				<small><div id="mensagem" align="center"></div></small>
			</div>
			<div class="modal-footer">       
				<button type="submit" id="botao" class="btn btn-primary">Salvar</button>
			</div>
			</form>

		</div>
	</div>
</div>

<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>



