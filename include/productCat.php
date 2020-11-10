<?php
$resultados = '';

foreach ($categories as $categorie) {


    $resultados .= ' <div class="col-md-2">
    <input type="checkbox" name="idcategories" value=' . $categorie->id . '>
    <label>' . $categorie->namec . '</label>
  </div>';
}

?>

<main>


    <h2 class="mt-3"><?= TITLE ?></h2>

    <div>
        <div class="card border-primary mt-5  bg-light" style="max-width: 25rem;">
            <div class="card-header border-primary">
                ID:#<?= $obProduct->id ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"> Nome: <?= $obProduct->name ?></h5>
                <p>Valor: R$ <?= $obProduct->value ?></p>
                <p> Descrição:</p>
                <p><?= $obProduct->description ?></p>
            </div>
        </div>
    </div>


    <form class="mt-5" action="" method="POST">
        <div class="row">

            <input style="color: white;" type="text" class="form-control-plaintext col-md-1" readonly id="idproduct" name="idproduct" required value="<?= $obProduct->id ?>">
            <input style="color: white;" type="text" class="form-control-plaintext col-md-1" readonly id="idproduct" name="idc" required value="<?= $obProduct->id ?>">

        </div>
        <label class="col-md-12">Categoria: </label>
        <div class="row mt-2 col-md-12">

            <?= $resultados ?>
        </div>
        <div class="col-md-1 mt-3">

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

    </form>

</main>