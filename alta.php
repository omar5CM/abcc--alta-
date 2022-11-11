<?php
    if( empty($_POST["sku"])  ){
        header("Location: index.php?sku=falta");
        exit();
    }
  
    include_once "model/conexion.php";
    $sku = $_POST["sku"];
    $articulo = $_POST["art"];
    $marca = $_POST["mar"];
    $modelo = $_POST["mod"];
    $departamento = $_POST["dep"];
    $clase = $_POST["cla"];
    $familia = $_POST["fam"];
    $fechaA = $_POST["fea"];
    $stock = $_POST["sto"];    
    $cantidad = $_POST["can"];
    $descontinuado = $_POST["des"]; 
    $fechaB = $_POST["feb"];            
/*    $sentencia = $bd->prepare("INSERT INTO dato(sku, articulo, marca, modelo, departamento, clase, familia, fechaA ) VALUES (?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$sku,$articulo,$marca,$modelo,$departamento, $clase,$familia,$fechaA]);*/
    $sentencia = $bd->prepare("INSERT INTO dato( sku ) VALUES (?);");
    $resultado = $sentencia->execute([$sku]);

  if( $resultado === TRUE) {
        header("Location: index.php?sku=registrado");
    } else {
        header("Location: index.php?sku=error");
    }

?> 