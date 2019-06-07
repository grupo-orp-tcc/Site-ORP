	  		<div id="user"  class="col-3 pt-lg-4">
	    		<div  id="card-user" class="card">
	      		<div id="cd" class="card-body">
						 	<div title="Upload de imagem" style="cursor:pointer;" class="image-upload">
								<label for="file-input">
	   							<div class="hover-image">
	   								<img style="cursor:pointer;" src="img\perfil_user\perfil.png" height="150px"/>
					  				<span class="texto">Adicione uma imagem</span>
									</div>
	    					</label>
	    					<input id="file-input" style="cursor:pointer;" type="file" accept="image/jpeg,.jpg,image/png,.png,.jpeg,image/webp,.webp"/>
							</div>
							<?php
							 	if(isset($_SESSION['cliente'])){
									$id = $_SESSION['id'];
	              	$query = "SELECT nome, cpf, tel_cel FROM cad_cliente WHERE id_cli = '$id'";
	              	$executar = mysqli_query($con, $query);
	              	$info = mysqli_fetch_array($executar);
							?>
									<center>
										<label><?php echo $info["nome"]?></label>
										<br/><br/><label><?php echo $info["cpf"]?></label>
										<br/><label><?php echo $info["tel_cel"]?></label>
										<br/><label>Redes Sociais</label>
									</center>
							<?php
								}
								else{
									$id = $_SESSION['id'];
									$query = "SELECT nome_empresa, cnpj, tel_cel FROM cad_fornecedor WHERE id_forne = '$id'";
									$exe = mysqli_query($con, $query);
									$info = mysqli_fetch_array($exe);
							?>
									<center>
										<label><?php echo $info["nome_empresa"]?></label>
										<br/><br/><label><?php echo $info["cnpj"]?></label>
										<br/><label><?php echo $info["tel_cel"]?></label>
										<br/><label>Redes Sociais</label>
									</center>
							<?php
								}
							?>
							</div>
		    		</div>
		  		</div>