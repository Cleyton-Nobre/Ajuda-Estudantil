        <?php
            include 'header-footer/headerOn.php';
            require_once '../src/perfil.php';

            if(isset($_POST['hidden'])){
            
                foreach ($_POST as $campos => $value) {//Criando as variavies
                    $$campos=$value;
                }
    
                $perfil=new perfil();//Instanciando novo OBJ
                $perfil->perfilUsuario($nome, $senhaAtual, $novaSenha);

                }
                $retorno=select('*', "usuario WHERE id='".$_SESSION['ID_USUARIO']."'");

                while($aux=mysqli_fetch_array($retorno)){
                    $nom=$aux["nome"];
                    $emai=$aux["email"];
                }
    
                if(isset($_SESSION['MSG'])){
                    echo $_SESSION['MSG'];
                    unset($_SESSION['MSG']);}
        ?>
        
        <section class="login-page mb-n5">
			<form class="" method='post'>
				<div class="box">
					<div class="form-head">
						<h2>PERFIL</h2>
					</div>
					<div class="form-body">
						<input type="text" placeholder="Nome" class="form-control mb-4" name='nome' value='<?=$nom?>'>
						<input type="email" placeholder="Email" class="form-control mb-4" value='<?=$emai?>' >
						<input type="Password" placeholder="Senha Atual" class="form-control mb-4" name='senhaAtual'>
                        <input type="Password" placeholder="Nova Senha" class="form-control mb-4" name='novaSenha'>
                        
                        <input type="hidden" name='hidden'>
					</div>
					<div class="form-footer">
						<button type="submit">Editar</button>
					</div>
				</div>
			</form>
        </section>
        <?php
            include 'header-footer/footer.php';
        ?>