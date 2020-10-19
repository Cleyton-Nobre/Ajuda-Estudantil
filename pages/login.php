    <?php
        require_once 'header-footer/headerOff.php';
        require_once '../src/login.php'; 
  
        if(isset($_POST['hidden'])){
            
            foreach ($_POST as $campos => $value) {//Criando as variavies
                $$campos=$value;
            }

            $login=new login();//Instanciando novo OBJ
            $login->loginU($email, $senha, 'usuario');
            }

            if(isset($_SESSION['MSG'])){
                echo $_SESSION['MSG'];
                unset($_SESSION['MSG']);}
        ?>
   
    
   <section class="login-page mb-n5">
			<form method='post'>
				<div class="box">
					<div class="form-head">
						<h2>LOGIN</h2>
					</div>
					<div class="form-body">
						<input type="text" placeholder="Email" name='email'>
                        <input type="Password" placeholder="Senha" name='senha'>
                        
                        <input type="hidden" name='hidden'>
					</div>
					<div class="form-footer">
						<button type="submit">Logar</button>
					</div>
					<a class='small text-center' href="http://localhost/Ajuda-Estudantil/pages/cadastro.php">Não tenho uma conta!</a>
				</div>
			</form>
		</section>
           
        
        <?php
            include 'header-footer/footer.php';
        ?>