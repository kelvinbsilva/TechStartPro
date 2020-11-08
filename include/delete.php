<main>

    <h2 class="mt-3">Excluir</h2>
    <form class="mt-4" action="" method="POST">
        <div class="row">
            <div">
                <p>Você deseja realmente excluir o produto <strong><?= $obProduct->name ?></strong>?</p>
            </div>
            <div>
                <a href="index.php">
                    <button type="button" class="btn btn-success">Cancelar</button>
                </a>

                <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
            </div>
        </div>


    </form>

</main>