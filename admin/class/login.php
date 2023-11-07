<?php

require_once('conexao.php');

class Login
{
    //ATRIBUTOS

    public $idUser;
    public $nomeUser;
    public $fotoUser;
    public $emailUser;
    public $foneUser;
    public $senhaUser;
    public $statusUser;

    //METODOS
    public function VerificarLogin()
    {
        $conn = Conexao::LigarConexao();

        if (isset($this->emailUser) && isset($this->senhaUser)) {
            $query = "SELECT * FROM usuario WHERE emailUser = :email AND senhaUser = :senha";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':email', $this->emailUser);
            $stmt->bindParam(':senha', $this->senhaUser);
        } elseif (isset($this->idUser)) {
            $query = "SELECT * FROM usuario WHERE idUser = :idUser";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':idUser', $this->idUser);
        }

        $stmt->execute();
        $lista = $stmt->fetch(PDO::FETCH_ASSOC);

        return $lista;
    }
}
