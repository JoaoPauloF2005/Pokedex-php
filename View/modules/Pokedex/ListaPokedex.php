<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../css/estilo_listPokedex.css">
    <link rel="shortcut icon" href="/../../img/simbolo_pokemon.jpg" type="image/x-icon">

    <style>
@import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
</style>

    <title>Lista Nomes</title>
</head>
<body>

    <header>
        <?php include 'View/modules/Pagina_Inicial/home.php' ?>
    </header>

    <br> <br> <br> <br> <br> <br>

 


    <?php foreach($model->rows as $item): ?>
            <div class="card">
                <img class="card-img-top" src="<?= $item['imagem'] ?>">
                <div class="card-body">
                    <h5 class="card-title">Nome:  <?= $item['nome'] ?></h5>
                    <ul class="list-group list-group-flush">

                        <p class="card-text">Habilidades:  <?= $item['habilidades'] ?> </p>
                        <p class="card-text">Tipo:  <?= $item['tipo'] ?></p>
                        <p class="card-text">Peso:  <?= $item['peso'] ?></p>
                        <p class="card-text">Altura:  <?= $item['altura'] ?></p>
                     

                    </ul>
                </div>
                <div class="card-body">
                <a href="/pokedex/form?id=<?= $item['id'] ?>" class="card-link">Editar Pokemon</a></b>
                    <a href="/pokedex/delete?id=<?= $item['id'] ?>" class="card-link">Deletar</a>
                </div>
            </div>
            <td>
        </tr>
    <?php endforeach ?>

    <?php if(count($model->rows) == 0): ?>
        <tr>
            <td colspan="5"> <center><br><br><br><b>Nenhum registro encontrado.</b></td></center>
        </tr>
    <?php endif ?>

</body>
</html>