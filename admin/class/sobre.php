<?php
require_once('conexao.php');

class SobreClass{
    public $idSobre;
    public $tituloSobre;
    public $descricaoSobre;
    public $urlSobre;
    public $fotoSobre1;
    public $fotoSobre2;
    public $fotoSobre3;
    public $fotoSobre4;
    public $descricaoFotoSobre;
    public $missaoSobre;
    public $visaoSobre;
    public $valoresSobre;
    public $statusSobre;

    public function __construct($id = false)
    {
        if($id){
            $this->idSobre = $id;
            $this->Carregar();
        }
    }

    public function Listar(){
        $query = "SELECT * FROM sobre WHERE statusSobre = 1 ORDER BY tituloSobre ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    public function Carregar()
    {
        $query = "SELECT * FROM sobre WHERE idSobre = " . $this->idSobre;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {

            $this->tituloSobre          = $linha['tituloSobre'];
            $this->descricaoSobre       = $linha['descricaoSobre'];
            $this->urlSobre             = $linha['urlSobre'];
            $this->fotoSobre1           = $linha['fotoSobre1'];
            $this->fotoSobre2           = $linha['fotoSobre2'];
            $this->fotoSobre3           = $linha['fotoSobre3'];
            $this->fotoSobre4           = $linha['fotoSobre4'];
            $this->descricaoFotoSobre   = $linha['descricaoFotoSobre'];
            $this->missaoSobre          = $linha['missaoSobre'];
            $this->visaoSobre           = $linha['visaoSobre'];
            $this->valoresSobre         = $linha['valoresSobre'];
            $this->statusSobre          = $linha['statusSobre'];

        }

    }

};