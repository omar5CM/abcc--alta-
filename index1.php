<?php include 'template/header.php'?>

<?php
  include_once "model/conexion.php";
  $sentencia = $bd -> query("select * from dato");
  $dato = $sentencia->fetchAll(PDO::FETCH_OBJ);
  //print_r($dato);
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <!--Inicio de Alerta--->
      <?php
        if(isset($_GET["sku"]) and $_GET["sku"]=="falta"){
      ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Debes rellenar el sku.
        <!--<button type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">&times</button>--->
        <a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times</a>
      </div>
      <?php
        }
      ?>

<?php
  if(isset($_GET["sku"]) and $_GET["sku"]=="registrado"){
  ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registrado!</strong> Datos guardados con éxito.
        <a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times</a>
      </div>
      <?php
        }
      ?>      
      <!--Fin de Alerta-->                  
            
 

        </div>
      </div>                                                                                                             
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Ingresar datos:
        </div>
        <form class="p-4" method="POST" action="alta.php">         
          <?php 
          if(isset($_GET["sku"])==false){?>
          <div class="mb-3">
            <label class="form-label">Sku</label>
            <input type="text" class="form-control" name="sku" id="sku"  >
          </div>          
<!--          $disabled = empty($_POST["sku"]) ? "disabled": ""; -->
          <div class="mb-3">
            <label class="form-label">Articulo</label>
            <input type="text" class="form-control" name="art" id ="art" disabled>
          </div>             
          <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" class="form-control" name="mar"  disabled autofocus>
          </div>
           <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" class="form-control" name="mod"  disabled autofocus>
          </div>            
          <div class="mb-3">
            <label class="form-label">Departamento</label>
            <input type="text" class="form-control" name="dep"  disabled autofocus>
          </div>  
          <div class="mb-3">
            <label class="form-label">Clase</label>
            <input type="text" class="form-control" name="cla"  disabled autofocus>
          </div>    
          <div class="mb-3">
            <label class="form-label">Familia</label>
            <input type="text" class="form-control" name="fam"  disabled autofocus>
          </div>   
          <div class="mb-3">
            <label class="form-label">Fecha Alta</label>
            <input type="text" class="form-control" name="fea"  disabled autofocus>
          </div>
          <div class="mb-2">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control" name="fea"  disabled autofocus>
          </div>  
          <div class="mb-3">
            <label class="form-label">Cantidad</label>
            <input type="text" class="form-control" name="fam"  disabled autofocus>
          </div>   
          <div class="mb-3">
            <label class="form-label">Descontinuado</label>
            <input type="text" class="form-control" name="fea"  disabled autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">Fecha Baja</label>
            <input type="text" class="form-control" name="fea"  disabled autofocus>
          </div>                    
          <?php }?>          

          <?php 
          if(isset($_GET["sku"])==false){?>
<!--          $disabled = empty($_POST["sku"]) ? "disabled": ""; -->
          <div class="mb-3">
            <label class="form-label">Sku</label>
            <input type="text" class="form-control" name="sku" id="sku" value="<?php echo htmlentities($var->sku); ?>" >
          </div>
          <div class="mb-3">
            <label class="form-label">Articulo</label>
            <input type="text" class="form-control" name="art" id ="art">
          </div>             
          <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" class="form-control" name="mar" autofocus>
          </div>
           <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" class="form-control" name="mod" autofocus>
          </div>            
          <div class="mb-3">
            <label class="form-label">Departamento</label>
            <input type="text" class="form-control" name="dep" autofocus>
          </div>  
          <div class="mb-3">
            <label class="form-label">Clase</label>
            <input type="text" class="form-control" name="cla" autofocus>
          </div>    
          <div class="mb-3">
            <label class="form-label">Familia</label>
            <input type="text" class="form-control" name="fam" autofocus>
          </div>   
          <div class="mb-3">
            <label class="form-label">Fecha Alta</label>
            <input type="text" class="form-control" name="fea" autofocus>
          </div>
          <div class="mb-2">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control" name="fea" autofocus>
          </div>  
          <div class="mb-3">
            <label class="form-label">Cantidad</label>
            <input type="text" class="form-control" name="fam" autofocus>
          </div>   
          <div class="mb-3">
            <label class="form-label">Descontinuado</label>
            <input type="text" class="form-control" name="fea" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">Fecha Baja</label>
            <input type="text" class="form-control" name="fea"  autofocus>
          </div>                    
          <?php }?>          

          <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit" class="btn btn-primary" value="Registrar">
          </div>
        </form>
      </div>    
    </div>
  </div>
</div>



<script>
function disable_items(option) {
    if (option==1){
        document.getElementById("sku").disabled=false;
        document.getElementById("art").disabled=true;
    }
    else if (option==2){
        document.getElementById("sku").disabled=false;
        document.getElementById("art").disabled=false;
    }    
}

</script>

<?php include 'template/footer.php'?>




