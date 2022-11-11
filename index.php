<?php include 'template/header.php'?>

<?php
  include_once "model/conexion.php";
  $sentencia = $bd -> query("select * from dato");
  $dato = $sentencia->fetchAll(PDO::FETCH_OBJ);
  //print_r($dato);
?>

<?php $var=$dato; 
  $sql="SELECT departamento.numero AS dnu, departamento.nombre AS dno, clase.numero AS cnu, clase.nombre AS cno 
  FROM departamento 
  INNER JOIN clase ON clase. ORDER BY "

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
        <strong>Registrado!</strong> Sku guardado con éxito.
<!--        <a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times</a>-->
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
<!--          echo "<input type='text' $disabled>";
          //if(isset($_GET["sku"])==false){?>-->
          <div class="mb-1">
            <label class="form-label">Sku</label>
            <input type="number" class="form-control" name="sku" id="sku" onkeypress="enter(key)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxlength);" maxlength='6'>
            <input type="button" onclick="mensaje()" class="btn btn-primary" value="Ok" >
          </div>
          <div class="mb-1">
            <label class="form-label">Articulo</label>
            <?php echo "<input type='text' disabled class='form-control' name='art' id ='art' maxlength='15'>"?>
            <input type="button" onclick="mensaje1()" class="btn btn-primary" value="Ok" >
          </div>
          <div class="mb-1">
            <label class="form-label">Marca</label>
            <?php echo "<input type='text' disabled class='form-control' name='mar' id ='mar' maxlength='15'>"?>
            <input type="button" onclick="mensaje2()" class="btn btn-primary" value="Ok" >
          </div>
          <div class="mb-1">
            <label class="form-label">Modelo</label>
            <?php echo "<input type='text' disabled class='form-control' name='mod' id ='mod' maxlength='20'>"?>
            <input type="button" onclick="mensaje3()" class="btn btn-primary" value="Ok" >
          </div>
          <div class="mb-1">
            <label class="form-label" for="dep">Departamento</label>
            <select name="dep" id="dep" onclick="mensaje4(value)">
            <option value="1">DOMESTICOS</option>
            <option value="2">ELECTRONICA</option>
            <option value="3">MUEBLE SUELTO</option>
            <option value="4">SALA
              S, RECAMARAS, COMEDORES</option>            
            </select>                    
          </div>
          <div class="mb-1">
            <label class="form-label">Clase</label>
            <select name="dep" id="dep" onclick="mensaje4(val)">
            <option value="1">DOMESTICOS</option>
            <option value="2">ELECTRONICA</option>
            <option value="3">MUEBLE SUELTO</option>
            <option value="4">SALAS, RECAMARAS, COMEDORES</option>            
            </select>   
          </div>  
          <div class="mb-1">
            <label class="form-label">Famlia</label>
            <select name="dep" id="dep" onclick="mensaje4(val)">
            <option value="1">DOMESTICOS</option>
            <option value="2">ELECTRONICA</option>
            <option value="3">MUEBLE SUELTO</option>
            <option value="4">SALAS, RECAMARAS, COMEDORES</option>            
            </select>   
          <div class="mb-1">
            <label class="form-label">Fecha de Alta</label>
            <?php echo "<input type='text' disabled class='form-control' name='fea' id ='fea' maxlength='15'>"?>
            <input type="button" onclick="mensaje7()" class="btn btn-primary" value="Ok" >
          </div>  
          <div class="mb-1">
            <label class="form-label">Stock</label>
            <?php echo "<input type='text' disabled class='form-control' name='sto' id ='sto' maxlength='15'>"?>
            <input type="button" onclick="mensaje8()" class="btn btn-primary" value="Ok" >
          </div> 
          <div class="mb-1">
            <label class="form-label">Cantidad</label>
            <?php echo "<input type='text' disabled class='form-control' name='can' id ='can' maxlength='15'>"?>
            <input type="button" onclick="mensaje9()" class="btn btn-primary" value="Ok" >
          </div> 
          <div class="mb-1">
            <label class="form-label">Descontinuado</label>
            <?php echo "<input type='text' disabled class='form-control' name='des' id ='des' maxlength='15'>"?>
            <input type="button" onclick="mensaje10()" class="btn btn-primary" value="Ok" >
          </div> 
          <div class="mb-1">
            <label class="form-label">Fecha Baja</label>
            <?php echo "<input type='text' disabled class='form-control' name='feb' id ='feb' maxlength='15'>"?>
            <input type="button" class="btn btn-primary" value="Ok" >
          </div>                                                                                
          <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit"  class="btn btn-primary" value="Registrar" >
          </div>
        </form>
      </div>    
    </div>
  </div>
</div>

<script>
function mensaje(){
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=true;
      document.getElementById("mod").disabled=true;  
      document.getElementById("dep").disabled=true;   
      document.getElementById("cla").disabled=true;
      document.getElementById("fam").disabled=true;
      document.getElementById("fea").disabled=true;
      document.getElementById("sto").disabled=true;  
      document.getElementById("can").disabled=true; 
      document.getElementById("des").disabled=true;  
      document.getElementById("feb").disabled=true;                        
}
function mensaje1(){
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=false;
      document.getElementById("mod").disabled=true;  
      document.getElementById("dep").disabled=true;   
      document.getElementById("cla").disabled=true;
      document.getElementById("fam").disabled=true;
      document.getElementById("fea").disabled=true;
      document.getElementById("sto").disabled=true;  
      document.getElementById("can").disabled=true; 
      document.getElementById("des").disabled=true;  
      document.getElementById("feb").disabled=true;                        
}
function mensaje2(){
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=false;
      document.getElementById("mod").disabled=false;  
      document.getElementById("dep").disabled=true;   
      document.getElementById("cla").disabled=true;
      document.getElementById("fam").disabled=true;
      document.getElementById("fea").disabled=true;
      document.getElementById("sto").disabled=true;  
      document.getElementById("can").disabled=true; 
      document.getElementById("des").disabled=true;  
      document.getElementById("feb").disabled=true;                        
}
function mensaje3(){
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=false;
      document.getElementById("mod").disabled=false;  
      document.getElementById("dep").disabled=false;   
      document.getElementById("cla").disabled=true;
      document.getElementById("fam").disabled=true;
      document.getElementById("fea").disabled=true;
      document.getElementById("sto").disabled=true;  
      document.getElementById("can").disabled=true; 
      document.getElementById("des").disabled=true;  
      document.getElementById("feb").disabled=true;                        
}
function mensaje4(val){
  if(val)
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=false;
      document.getElementById("mod").disabled=false;  
      document.getElementById("dep").disabled=false;   
      document.getElementById("cla").disabled=false;
      document.getElementById("fam").disabled=true;
      document.getElementById("fea").disabled=true;
      document.getElementById("sto").disabled=true;  
      document.getElementById("can").disabled=true; 
      document.getElementById("des").disabled=true;  
      document.getElementById("feb").disabled=true;                        
}
function mensaje5(){
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=false;
      document.getElementById("mod").disabled=false;  
      document.getElementById("dep").disabled=false;   
      document.getElementById("cla").disabled=false;
      document.getElementById("fam").disabled=false;
      document.getElementById("fea").disabled=true;
      document.getElementById("sto").disabled=true;  
      document.getElementById("can").disabled=true; 
      document.getElementById("des").disabled=true;  
      document.getElementById("feb").disabled=true;                        
}
function mensaje6(){
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=false;
      document.getElementById("mod").disabled=false;  
      document.getElementById("dep").disabled=false;   
      document.getElementById("cla").disabled=false;
      document.getElementById("fam").disabled=false;
      document.getElementById("fea").disabled=false;
      document.getElementById("sto").disabled=true;  
      document.getElementById("can").disabled=true; 
      document.getElementById("des").disabled=true;  
      document.getElementById("feb").disabled=true;                        
}
function mensaje7(){
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=false;
      document.getElementById("mod").disabled=false;  
      document.getElementById("dep").disabled=false;   
      document.getElementById("cla").disabled=false;
      document.getElementById("fam").disabled=false;
      document.getElementById("fea").disabled=false;
      document.getElementById("sto").disabled=false;  
      document.getElementById("can").disabled=true; 
      document.getElementById("des").disabled=true;  
      document.getElementById("feb").disabled=true;                        
}
function mensaje8(){
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=false;
      document.getElementById("mod").disabled=false;  
      document.getElementById("dep").disabled=false;   
      document.getElementById("cla").disabled=false;
      document.getElementById("fam").disabled=false;
      document.getElementById("fea").disabled=false;
      document.getElementById("sto").disabled=false;  
      document.getElementById("can").disabled=false; 
      document.getElementById("des").disabled=true;  
      document.getElementById("feb").disabled=true;                        
}
function mensaje9(){
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=false;
      document.getElementById("mod").disabled=false;  
      document.getElementById("dep").disabled=false;   
      document.getElementById("cla").disabled=false;
      document.getElementById("fam").disabled=false;
      document.getElementById("fea").disabled=false;
      document.getElementById("sto").disabled=false;  
      document.getElementById("can").disabled=false; 
      document.getElementById("des").disabled=false;  
      document.getElementById("feb").disabled=true;                        
}
function mensaje10(){
      document.getElementById("sku").disabled=false;
      document.getElementById("art").disabled=false;
      document.getElementById("mar").disabled=false;
      document.getElementById("mod").disabled=false;  
      document.getElementById("dep").disabled=false;   
      document.getElementById("cla").disabled=false;
      document.getElementById("fam").disabled=false;
      document.getElementById("fea").disabled=false;
      document.getElementById("sto").disabled=false;  
      document.getElementById("can").disabled=false; 
      document.getElementById("des").disabled=false;  
      document.getElementById("feb").disabled=false;                        
}
</script>

<?php include 'template/footer.php'?>