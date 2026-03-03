 <?php
 require_once("DAO/UsuarioDAO.php");
class UsuarioController{
    private $usuarioDAO;

    public function __construct(){
        $this ->usuarioDAO = new UsuarioDAO();
    }

    public function Cadastro(Usuario $usuario){
        if(strlen($usuario->getName())>3 && strlen($usuario->getPassword())>=7 && strpos($usuario->getEmail(), "@") > 0 ){
            return $this->usuarioDAO->CadastrarUsuario($usuario);
        } else{
            return -2;
        }
    }
}
 ?>
