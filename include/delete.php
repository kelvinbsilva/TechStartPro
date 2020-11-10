<main>

    <h2 class="mt-3">Excluir</h2>
    <form class="mt-4" action="" method="POST">
        <div class="row">
            
            <div class="col-md-12">
                
                <p>Você deseja realmente excluir o produto <strong></strong>?</p>
            </div>
            <div class="col-md-12">
                <a href="index.php">
                    <button type="button" class="btn btn-success">Cancelar</button>
                </a>

                <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
            </div>
        </div>

        <input style="color: white;" type="text" class="form-control-plaintext col-md-1" readonly id="idproduct" name="idproduct" required value="<?= $obProduct->id ?>">
    </form>

</main>