<?php

class DB {
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $database = 'cadastros';

    public function conecta_mysql() {
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        // Caso a conexão dê erro, exibirá a mensagem
        if (!$con) {
            die('Erro ao tentar conectar ao banco de dados: ' . mysqli_connect_error());
        }

        // Define UTF-8 para evitar erro com acentos
        mysqli_set_charset($con, "utf8");

        return $con;
    }
}

?>
