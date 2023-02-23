<?php

include('db.php');

$USUARIO = $_POST['email'];
$PASSWORD = $_POST['password'];

$consulta = "SELECT* FROM personal where usuario = '$USUARIO'";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.html");
}else{
    include("index.html");
    ?>
    <h1>ERROR</h1>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>