<?php
namespace Controllers;

use \Core\ControllerGeral;
use \Models\Usuarios;

    class LoginController extends ControllerGeral {

        public function index() {

            $dados = array();
            $u = new Usuarios();

            if(isset($_POST['email']) && !empty($_POST['email'])) {
                $email = addslashes($_POST['email']);
                $senha = $_POST['senha'];

                if($u->login($email, $senha)) {
                    ?>
                    <script type="text/javascript">window.location.href="../";</script>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-danger">
                        Usuário e/ou Senha errados!
                    </div>
                    <?php
                }
            }

            //Chamando a view da página view e passando valores
			$this->loadTemplate('Login');
        }

        public function sair(){
            session_start();
            unset($_SESSION['cLogin']);
            echo 'Sessão: '. $_SESSION['cLogin'];
            header("Location: ./");
        }
    }
?>