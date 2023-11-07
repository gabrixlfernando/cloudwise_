<?php
require_once('conexao.php');

class SobreClass
{
    public $idSobre;
    public $tituloSobre;
    public $descricaoSobre;
    public $descricaoSobre2;
    public $urlSobre;
    public $fotoSobre1;
    public $fotoSobre2;
    public $fotoSobre3;
    public $fotoSobre4;
    public $descricaoFotoSobre1;
    public $descricaoFotoSobre2;
    public $descricaoFotoSobre3;
    public $descricaoFotoSobre4;
    public $missaoSobre1;
    public $missaoSobre2;
    public $missaoSobre3;
    public $visaoSobre1;
    public $visaoSobre2;
    public $visaoSobre3;
    public $valoresSobre1;
    public $valoresSobre2;
    public $valoresSobre3;
    public $statusSobre;

    public function __construct($id = false)
    {
        if ($id) {
            $this->idSobre = $id;
            $this->Carregar();
        }
    }

    public function Listar()
    {
        $query = "SELECT * FROM sobre WHERE statusSobre = 1 ORDER BY tituloSobre ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Inserir()
    {
        $query = "INSERT INTO sobre (tituloSobre, 
                                        descricaoSobre,                                          
                                        descricaoSobre2,
                                        fotoSobre1,
                                        fotoSobre2,
                                        fotoSobre3,
                                        fotoSobre4,
                                        descricaoFotoSobre1,
                                        descricaoFotoSobre2,
                                        descricaoFotoSobre3,
                                        descricaoFotoSobre4,
                                        missaoSobre1,
                                        missaoSobre2,
                                        missaoSobre3,
                                        visaoSobre1,
                                        visaoSobre2,
                                        visaoSobre3,
                                        valoresSobre1,
                                        valoresSobre2,
                                        valoresSobre3,
                                        statusSobre)
                    VALUES ('" . $this->tituloSobre . "', 
                            '" . $this->descricaoSobre . "', 
                            '" . $this->descricaoSobre2 . "', 
                            '" . $this->fotoSobre1 . "', 
                            '" . $this->fotoSobre2 . "', 
                            '" . $this->fotoSobre3 . "', 
                            '" . $this->fotoSobre4 . "', 
                            '" . $this->descricaoFotoSobre1 . "', 
                            '" . $this->descricaoFotoSobre2 . "', 
                            '" . $this->descricaoFotoSobre3 . "', 
                            '" . $this->descricaoFotoSobre4 . "', 
                            '" . $this->missaoSobre1 . "', 
                            '" . $this->missaoSobre2 . "', 
                            '" . $this->missaoSobre3 . "', 
                            '" . $this->visaoSobre1 . "', 
                            '" . $this->visaoSobre2 . "', 
                            '" . $this->visaoSobre3 . "', 
                            '" . $this->valoresSobre1 . "', 
                            '" . $this->valoresSobre2 . "', 
                            '" . $this->valoresSobre3 . "', 
                            '" . $this->statusSobre . "')";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script> document.location='index.php?p=servico'</script>";
    }


    public function Carregar()
    {
        $query = "SELECT * FROM sobre WHERE idSobre = 1";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {

            $this->tituloSobre          = $linha['tituloSobre'];
            $this->descricaoSobre       = $linha['descricaoSobre'];
            $this->descricaoSobre2      = $linha['descricaoSobre2'];
            $this->urlSobre             = $linha['urlSobre'];
            $this->fotoSobre1           = $linha['fotoSobre1'];
            $this->fotoSobre2           = $linha['fotoSobre2'];
            $this->fotoSobre3           = $linha['fotoSobre3'];
            $this->fotoSobre4           = $linha['fotoSobre4'];
            $this->descricaoFotoSobre1   = $linha['descricaoFotoSobre1'];
            $this->descricaoFotoSobre2   = $linha['descricaoFotoSobre2'];
            $this->descricaoFotoSobre3   = $linha['descricaoFotoSobre3'];
            $this->descricaoFotoSobre4   = $linha['descricaoFotoSobre4'];
            $this->missaoSobre1          = $linha['missaoSobre1'];
            $this->missaoSobre2          = $linha['missaoSobre2'];
            $this->missaoSobre3          = $linha['missaoSobre3'];
            $this->visaoSobre1           = $linha['visaoSobre1'];
            $this->visaoSobre2           = $linha['visaoSobre2'];
            $this->visaoSobre3           = $linha['visaoSobre3'];
            $this->valoresSobre1         = $linha['valoresSobre1'];
            $this->valoresSobre2         = $linha['valoresSobre2'];
            $this->valoresSobre3         = $linha['valoresSobre3'];
            $this->statusSobre          = $linha['statusSobre'];
        }
    }
};
