<?php 
$resultados = '';

foreach ($categories as $categorie) {

    $resultados .= '<br><input type="checkbox" name="idcatories" value="'. $categorie->id . '">
    <label>'.$categorie->name . '</label><br>'
                         ;
}

?>

<main>

    <h2 class="mt-3"><?= TITLE ?></h2>
    <form class="mt-4" action="" method="POST">
        <div class="row">
            <div class="col-md-4">
                <label>Produto</label>
                <input type="text" class="form-control" name="name" required value="<?= $obProduct->name ?>">
            </div>
            <div class="col-md-4">
                <label>Valor: </label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">R$</div>
                    </div>
                    <input type="text" name="value" class="form-control" required value="<?= $obProduct->value ?>">
                </div>

            </div>
            <div class="col-md-4">
                <label>Categoria: </label>
                 <?=$resultados?>
            </div>
            <div class="col-md-12">
                <label>Descrição: </label>
                <textarea name="description" class="form-control" placeholder="Descrição" required><?= $obProduct->description ?></textarea>
            </div>
            <div class="col-auto mt-3">
                
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>


        </div>
    </form>

</main>