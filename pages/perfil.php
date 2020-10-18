        <?php
            include 'header-footer/headerOn.php';
            require_once '../src/autorizacao.php';

            if(isset($_POST['hidden'])){
            
                foreach ($_POST as $campos => $value) {//Criando as variavies
                    $$campos=$value;
                }
    
                $autoriza=new autorizacao();//Instanciando novo OBJ
                $autoriza->autoriza($motivo, $senha);
                }
    
                if(isset($_SESSION['MSG'])){
                    echo $_SESSION['MSG'];
                    unset($_SESSION['MSG']);}
        ?>
        
        <form class="text-center border border-light p-5 col-lg-4 mx-auto border border-dark rounded mt-5" method='post'>

            <h2 class="h1 mb-4">Autorização</h2>

            <textarea name="motivo" id="" cols="10" rows="7" class="form-control mb-4" placeholder="Motivo da saída" maxlength="280"></textarea>

            <input type="password" class="form-control" placeholder="Senha" name='senha'>
        
            <button class="btn btn-info my-4 btn-block col-5 mx-auto" type="submit">Confirmar</button>

            <input type="hidden" name='hidden'>

        </form>

        <?php
            include 'header-footer/footer.php';
        ?>