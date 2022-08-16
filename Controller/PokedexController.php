<?php

class PokedexController
{
    public static function index()
    {
       include 'Model/PokedexModel.php';

       $model = new PokedexModel;
       $model->getAllRows();

       
       include 'View/modules/Pokedex/ListaPokedex.php';
    }

    public static function form()
    {
        include 'Model/PokedexModel.php';

        $model = new PokedexModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
            
        include 'View/modules/Pokedex/FormPokedex.php';
    }

    public static function save() 
    {
        include 'Model/PokedexModel.php';

        $model = new PokedexModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->habilidades = $_POST['habilidades'];
        $model->tipo = $_POST['tipo'];
        $model->peso = $_POST['peso'];
        $model->altura = $_POST['altura'];
        $model->imagem = $_POST['imagem'];


        
        
        $model->save(); 

        header("Location: /pokedex"); 
    }

    public static function delete()
    {
        include 'Model/PokedexModel.php';

        $model = new PokedexModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /pokedex");
    }
}