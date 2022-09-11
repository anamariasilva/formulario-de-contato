<?php

echo "<div>
					<h3>Formul&aacute;rio de Contato</h3>
                    <form method="post" action="entreemcontato_enviaremail.php">
					<div class="form-group">                    
						<label for="Nome" class="sr-only">Nome:</label>
						<input id="nome" name="nome" class="form-control" placeholder="Nome" type="text">
					</div>
					<div class="form-group">
						<label for="E-mail" class="sr-only">E-mail:</label>
						<input id="email" name="email" class="form-control" placeholder="E-mail" type="email">
					</div>
					<div class="form-group">
						<label for="Assunto" class="sr-only">Assunto:</label>
						<input id="assuntomensagem" name="assuntomensagem" class="form-control" placeholder="Assunto" type="text">
					</div>
					<div class="form-group">
						<label for="mensagem" class="sr-only">Mensagem:</label>
						<textarea id="mensagem" name="mensagem" cols="30" rows="5" class="form-control" placeholder="Mensagem"></textarea>
					</div>
					<div class="form-group">
						<input class="btn btn-primary btn-lg" value="Enviar" type="submit">
					</div>  
                    </form>
					</div>
				</div>
		    </div>"

?>