<?php

$resultados = '';
$nocategories = '';
$filter = '';
foreach ($products as $product){

  $nocategories = '
  <div class="card border-primary mt-5  bg-light">
  <div class="card-header border-primary">
  <div class="row">
  <div class="col-md-6 col-sm-6">
    <h5 class="card-title"> Nome produto: ' . $product->name . ' </h5>
  </div>
  <div class="col-md-4 col-sm-6  offset-md-2">
  <a href="edit.php?id=' . $product->id . '">
  <button type="button" class="btn btn-outline-primary">Editar</button>
  <a href="confirm.php?id=' . $product->id . '">
  <button type="button" class="btn btn-outline-primary">Incluir Categoria</button>
  </a>
  <a href="delete.php?id=' . $product->id . '">
  <button type="button" class="btn btn-outline-danger">Excluir</button>
  </a>
</a>
</div>
</div>
   
  
  </div>
  <div class="card-body">
  <div class="row">
    <div class="col-md-3">
          <p>Valor: R$ ' . $product->value . '</p>
          
          
    </div>
    <div class="col-md-5">
      <p> Descrição:</p>
      <p>' . $product->description . '</p>
    </div>

    <div class="col-md-3">
    <p> Categorias:</p>
    <p> Esse produto não possui categoria </p>
    </div>
      
  </div>
  </div>
      
  </div>';
}


foreach ($categories as $categorie) {


  $filter .= '<option value='. $categorie->id .'>'. $categorie->namec .'</option>';
}

foreach ($idcategorie as $categorie) {

    $resultados .= '
  <div class="card border-primary mt-5  bg-light">
            <div class="card-header border-primary">
            <div class="row">
            <div class="col-md-6 col-sm-6">
              <h5 class="card-title"> Nome produto: ' . $categorie->name . ' </h5>
            </div>
            <div class="col-md-4 col-sm-6  offset-md-2">
            <a href="edit.php?id=' . $categorie->id . '">
            <button type="button" class="btn btn-outline-primary">Editar</button>
            <a href="confirm.php?id=' . $categorie->id . '">
            <button type="button" class="btn btn-outline-primary">Incluir Categoria</button>
            </a>
            <a href="delete.php?id=' . $categorie->idc . '">
            <button type="button" class="btn btn-outline-danger">Excluir</button>
            </a>
          </a>
          </div>
          </div>
             
            
            </div>
            <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                    <p>Valor: R$ ' . $categorie->value . '</p>
                    
                    
              </div>
              <div class="col-md-5">
                <p> Descrição:</p>
                <p>' . $categorie->description . '</p>
              </div>

              <div class="col-md-3">
              <p> Categorias:</p>
                <buttom class="btn btn-outline-dark">
                ' . $categorie->namec . '
                </buttom>
              
              </div>
                
            </div>
            </div>
                
            </div>';
  }

?>
<div class="row"></div>
<main>
  <foorm  action="<?php echo $SERVER['PHP_SELF']; ?>">
    <div class=" mt-4 form-row">
      <div class="col-md-6">
        <input placeholder="Pesquisar" class="form-control" type="text" name="product">
      </div>
      <div class="col-md-4">
      <select class="custom-select">
        <?=$filter?>
      </select>
      </div>
      <button type="submit" class="btn btn-outline-primary"> Buscar </button>

  </foorm>
  </div>
  <?=  $nocategories ?>
  <?= $resultados ?>




</main>