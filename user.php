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
								require_once "crud/select.php";
							 	if(isset($_SESSION['cliente'])){
							?>
									<center>
										<label><?php echo $info["nome"]?></label>
										<br/><br/><label><?php echo $info["cpf"]?></label>
										<br/><label><?php echo $info["tel_cel"]?></label>
										<br/><label>Redes Sociais</label>
									</center>
							<?php
						}else{
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
