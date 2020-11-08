<?php
  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

$resultados = '';

foreach ($products as $product) {
    $resultados .= '<tr>
                          <td>' . $product->name . '</td>
                          <td>' . $product->value . '</td>
                          <td>' . $product->description . '</td>
                          <td></td>
                          <td>
                        <a href="edit.php?id=' . $product->id . '">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="delete.php?id=' . $product->id . '">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                        
                        </tr>';
}
$resultados = strlen($resultados) ? $resultados : '<tr>
<td colspan="6" class="text-center">
       Nenhum produto encontrado
</td>
</tr>';


?>

<main>
<?= $mensagem ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Valor</th>
                <th scope="col">Descrição</th>
                <th scope="col">Categorias</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?= $resultados ?>
        </tbody>

    </table>

</main>