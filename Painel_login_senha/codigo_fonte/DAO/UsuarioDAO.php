<?php

require_once("Model/Usuario.php");
class UsuarioDAO {
    private $debug = true;
    private $dir = "arquivos";

    public function CadastrarUsuario(Usuario $usuario) {
        try {
            $fileName = $usuario->getEmail() . ".txt";

            if (!$this->VerificarArquivoExistente($fileName)) {
                $diretorioCompleto = $this->dir . "/" . $fileName;

                $fopen = fopen($diretorioCompleto, "w");

                $str = "{$usuario->getName()}; {$usuario->getPassword()}; {$usuario->getEmail()}; {$usuario->getDate()}";

               if(fwrite($fopen, $str)){
                 fclose($fopen);
                 return 1;
               }else{
                fclose($fopen);
                return -10;
               }
                fclose($file);

                return true;
            } else {
                return -1;
            }
        } catch (\Exception $ex) {
            if ($this->debug) {
                echo "Erro: " . $ex->getMessage();
            }
            return false;
        }
    }

    public function VerificarArquivoExistente(string $nomeArquivo) {
        $diretorioCompleto = $this->dir . "/" . $nomeArquivo;
        return file_exists($diretorioCompleto);
    }
}
?>
