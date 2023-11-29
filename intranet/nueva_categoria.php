<?php
require_once("includes/datos.php");
$title = "Nueva Categoria Del Trivia";
require_once("includes/head.php");
?>
<fieldset>
    <legend>Intruduzca Categoría</legend>
    <form action="includes/nueva_categoria.php" method="POST">
        <input type="text" name="categoria" require maxlength="75">
        <input type="submit" value="guardar">
    </form>
</fieldset>
<?php
require_once("includes/footer.php");
$mysqli->close();
?>