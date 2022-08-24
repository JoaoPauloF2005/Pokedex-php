<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/estilo_home.css">

    <title>Cadastro de Pokémons</title>
   
    <style>
        
    
    </style>
</head>
<body>

    <form action="/pokedex/save" method="post">

    <header>
        <?php include 'View/modules/Pagina_Inicial/home.php' ?>
    </header>

    <br>   <br>   <br>   <br>   <br>   <br>   <br>

        <div class="container">
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome do Pokemon:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome?>" />

            <label for="habilidades">habilidades:</label>
            <input name="habilidades" id="habilidades" type="text" value="<?= $model->habilidades ?>"> </textarea> 

            <label for="tipo">Tipo:</label>
            <input name="tipo" id="tipo" type="text" value="<?= $model->tipo ?>" />

            <label for="peso">Peso:</label>
            <input name="peso" id="peso" type="number" value="<?= $model->peso ?>" />

            <label for="altura">Altura:</label>
            <input name="altura" id="altura" type="number" value="<?= $model->altura ?>" />

            <label for="imagem">imagem:</label>
            <input name="imagem" id="imagem" type="url" value="<?= $model->imagem ?>" />

            <br>

            <button type="submit">Cadastrar</button>
        </div>

    </form>
    
</body>
</html>