<?php

require_once('class/conexao.php');

class UsuarioClass{
    public $idUser;
    public $nomeUser;
    public $fotoUser;
    public $emailUser;
    public $foneUser;
    public $senhaUser;
    public $statusUser;


    //METODOS

    public function __construct($id = false)
    {
        if ($id) {
            $this->idUser = $id;
            $this->Carregar();
        }
    }
    public function Listar(){
        $query = "SELECT * FROM usuario WHERE statusUser = 1 ORDER BY nomeUser ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Carregar()
    {
        $query = "SELECT * FROM usuario WHERE idUser = " . $this->idUser;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {

            $this->nomeUser            = $linha['nomeUser'];
            $this->fotoUser            = $linha['fotoUser'];
            $this->emailUser           = $linha['emailUser'];
            $this->foneUser            = $linha['foneUser'];
            $this->senhaUser           = $linha['senhaUser'];
            $this->statusUser          = $linha['statusUser'];

        }

    }

    public function Inserir()
    {
        $query = "INSERT INTO usuario   (idUser,
                                         nomeUser,
                                         fotoUser,
                                         emailUser, 
                                         foneUser, 
                                         senhaUser, 
                                         statusUser) 
                                VALUES 
                                         (DEFAULT,
                                         '".$this->nomeUser."',
                                         '".$this->fotoUser."',
                                         '".$this->emailUser."',
                                         '".$this->foneUser."',
                                         '".$this->senhaUser."',
                                         '".$this->statusUser."')";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script> document.location='index.php?p=usuario'</script>";
    }
}

