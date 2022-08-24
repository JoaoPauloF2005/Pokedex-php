<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Nomes</title>
</head>
<body>

   

        <?php foreach($model->rows as $item): ?>
            <div class="card">

            <div class="card">
                <img class="card-img-top" src="<?= $item['imagem'] ?>">
         
         <ul class="list-group list-group-flush">
                 <li class="list-group-item" style="color:#212121">Nome do Pokemon: <?= $item['nome'] ?></li>
             </ul>

             <ul class="list-group list-group-flush">
                 <li class="list-group-item" style="color:#212121">Hablidades: <?= $item['habilidades'] ?></li>
             </ul>

                <ul class="list-group list-group-flush">
                 <li class="list-group-item" style="color:#212121">Tipo: <?= $item['tipo'] ?></li>

                 <ul class="list-group list-group-flush">
                 <li class="list-group-item" style="color:#212121">Peso: <?= $item['peso'] ?></li>
             </ul>

             <ul class="list-group list-group-flush">
                 <li class="list-group-item" style="color:#212121">Altura: <?= $item['altura'] ?></li>
             </ul>

            

                 <div class="card-body">

                 <button type="button" class="btn btn-dark">
                     <a href="/pokedex/form?id=<?= $item['id'] ?>">Editar Pokemon</a> 
                 </button>

                 <button type="button" class="btn btn-dark">
                     <a href="/pokedex/delete?id=<?= $item['id'] ?>">Deletar</a> 
                 </button>
             </div>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>