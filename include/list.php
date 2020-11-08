<?php

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
                        <a href="excluir.php?id=' . $product->id . '">
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

    <section>
        <a href="register.php">
            <button class="btn btn-success">
                Cadastrar produto
            </button>
        </a>
    </section>
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