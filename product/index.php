<?php

  include "../app/ProductCont.php";
  $prod = new ProductCont();
  $product = $prod->productsApi();
  $brands = $prod->allBrands();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Productos</title>
  <?php
    include "../layouts/head.php";
  ?>
</head>
<body>

      <?php
        include "../layouts/header.php";
      ?>

      <div class="row">

        <div class="col-2">
          <!-- SIDEBAR -->

          <?php
            include "../layouts/sidebar.php";
          ?>

        </div>

        <div class="col-lg-10 col-sm-12">
                <div class="container-fluid">
                    <div class="border-buttom">
                        <div class="row m-2">
                            <div class="col">
                                <h4>Productos</h4>
                            </div>
                            <div class="col">
                                <button class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#createProductModal">
                                    Añador Productos
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    <?php if (isset($product) && count($product)>0): ?>
                          <?php foreach($product as $productAct): ?>

                            <div class="col-md-3 col-sm-12 p-2">
                            <div class="card" style="width: 18rem;">
                              <img src="<?php echo $productAct->cover?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $productAct->name ?></h5>
                                <p class="card-text text-center"><?php echo $productAct->description ?></p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createProductModal">Editar</a>
                                <a href="#" class="btn btn-primary" onclick="remove()">Eliminar</a>
                                <a href="detalles.php" class="btn btn-primary" >Detalles</a>
                              </div>
                            </div>
                            </div>
                         <?php endforeach ?> 
                      <?php endif ?>
                    </div>
                </div>
            </div>

      </div>
          
        </div>

        <!-- Modal -->
      <div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form enctype="multipart/form-data" method="post" action="../app/ProductCont.php">
              
              <input type="hidden" name="action" value="create">
              
              <div class="modal-body">
                
                <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" placeholder="Product name" aria-describedby="basic-addon1">

                <div class="input-group mb-3">
                <input name="slug" type="text" class="form-control" placeholder="Product slug" aria-describedby="basic-addon1">

                <div class="input-group mb-3">
                <input name="description" type="text" class="form-control" placeholder="Product description" aria-describedby="basic-addon1">

                <div class="input-group mb-3">
                <input name="features" type="text" class="form-control" placeholder="Product features" aria-describedby="basic-addon1">

                <div class="input-group mb-3">

                <select name="brand_id" class="form-select">
                  <?php foreach ($brands as $brand){?>
                    <option value="<?php echo $brand->id;?>" class="dropdown-item"><?php echo $brand->name;?></option>
                  <?php } ?>
                </select>


            </div>

                <div class="input-group mb-3">
                <input name="img" type="file" class="form-control" placeholder="Product cover" aria-describedby="basic-addon1">

              </div>
              
            
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

            </form>
          </div>
        </div>
      </div>

      <script>
        function remove(){
          swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
              });
            } else {
              swal("Your imaginary file is safe!");
            }
          });
        }
      </script>

  <?php
    include "../layouts/script.php";
  ?>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>