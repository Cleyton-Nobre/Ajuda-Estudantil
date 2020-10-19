    <?php
        require_once 'header-footer/headerOff.php';
        require_once '../src/cadastro.php'; 

    if(isset($_POST['hidden'])){
       
        foreach ($_POST as $campos => $value) {//Criando as variavies
            $$campos=$value;
        }

        $cadastro=new cadastro();//Instanciando novo OBJ
        $cadastro->cadastroUsuario($nome, $email, $senha, $repitaSenha);
        }

        if(isset($_SESSION['MSG'])){
            echo $_SESSION['MSG'];
            unset($_SESSION['MSG']);}
    ?>
    
    <section class="login-page mb-n5">
			<form class="" method='post'>
				<div class="box">
					<div class="form-head">
						<h2>CADASTRO</h2>
					</div>
					<div class="form-body">
						<input type="text" placeholder="Nome" class="form-control mb-4" name='nome'>
						<input type="email" placeholder="Email" class="form-control mb-4" name='email'>
						<input type="Password" placeholder="Senha" class="form-control mb-4" name='senha'>
                        <input type="Password" placeholder="Repita a senha" class="form-control mb-4" name='repitaSenha'>
                        
                        <input type="hidden" name='hidden'>
					</div>
					<div class="form-footer">
						<button type="submit">Cadastro</button>
					</div>
					<a class='small text-center' href="http://localhost/Ajuda-Estudantil/pages/login.php">Já tenho uma conta!</a>
				</div>
			</form>
        </section>

        <?php
            include 'header-footer/footer.php';
        ?>