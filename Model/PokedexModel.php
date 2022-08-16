<?php

class PokedexModel
{
    public $id, $nome, $habilidades, $tipo, $peso, $altura, $imagem;

    public $rows;

    public function save()
    {
        include 'DAO/PokedexDAO.php';

        $dao = new PokedexDAO();

        if(empty($this->id)) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }
    public function getAllRows()
    {
        include 'DAO/PokedexDAO.php';

        $dao = new PokedexDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/PokedexDAO.php';
        
        $dao = new PokedexDAO;

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PokedexModel(); 

    }

    public function delete(int $id)
    {
        include 'DAO/PokedexDAO.php';

        $dao = new PokedexDAO();

        $dao->delete($id);
    }

}