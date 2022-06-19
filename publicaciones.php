<?php include("template/cabecera.php"); ?>
<?php include("administrador/config/db.php"); 
$sentenciaSQL= $conexion->prepare("SELECT * FROM post");
$sentenciaSQL->execute();
$listaPost=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaPost as $Post){?>

<div class="col-md-3">
<div class="card">
    <audio controls>
<source  src="./img/<?php echo $Post['imagen']; ?>" alt="">
    </audio>
<div class="card-body">
    <h4 class="card-title"><?php echo $Post['nombre']; ?></h4>
</div>
</div>
</div>

<?php }?>



<?php include("template/pie.php"); ?>