<h4>
<?php
foreach ($model as $correo){
    echo "<div><h2>Nombre:</h2><h1>".$correo->usuario."</h1></div>";
    echo "<br>";
    echo "<div><h2>Correo:</h2><h1>".$correo->email."</h1></div>";
}
?>
</h4>