<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoas</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>Hablidades</th>
            <th>tipo</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Imagem</th>

        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/pokedex/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/pokedex/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->hablidades ?></td>
            <td><?= $item->tipo ?></td>
            <td><?= $item->peso ?></td>
            <td><?= $item->altura ?></td>
            <td><?= $item->imagem ?></td>
          

        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>
