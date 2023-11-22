<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/prueba.php" method='post'>

<h1>juego picas y fijas</h1> 

ingrese numero de 4 cifras
 <input type="number" name= "numero"> 
 <input type="hidden" value= '<?php if(!$_POST['generado']){ echo rand(1111,9999);}else{ echo $_POST['generado']; }?>' name= "generado">
<button> evaluar</button>

 </form>
  <?php  echo $_GET['mensaje'];?>
</body>
</html>


<?php 




if($_POST['numero']){

$picas=0;
$fijas=0;

$ingresado= $_POST['numero'];



 $arrIng=str_split($ingresado);
 $arrgen= str_split($_POST['generado']);


    for($i=0; $i< count($arrgen); $i++){
        for($j=0; $j< count($arrIng); $j++){
            if($arrIng[$j]==$arrgen[$i])  {

            if($i==$j){
                echo('fija'.$arrIng[$i].'<br>');
                $fijas+=1;
            }
            else if($i!=$j){
                echo 'pica'.$arrIng[$i].'<br>';
                $picas+=1;
            }



            }
            
        }
        
    }
    echo "picas".$picas."fijas".$fijas;

    if($fijas==4){

        echo '<h1>has ganado</h1>';
        
        header('location:'.'/prueba.php?mensaje= has ganado');
    }

}

?>

