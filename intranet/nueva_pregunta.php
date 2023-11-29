<?php
require_once("includes/datos.php");
$title = "Nueva Pregunta Del Trivia";
require_once("includes/head.php");
?>
<fieldset>
    <div class="">
        <legend>Intruduzca Pregunta</legend>
        <form action="includes/nueva_pregunta.php" method="POST">
            <select name="categoria">
                <option value="">Categorias</option>
                <?php
                $resultado = $mysqli->query("SELECT * FROM categorias order by id_cate desc"); //Result
                while ($fila = $resultado->fetch_assoc()) {
                    echo '<option value="' . $fila['id_cate'] . '">' . $fila['categoria'] . '</option>';
                }
                ?>
            </select>
            <textarea name="pregunta" requere placeholder="Pregunta..."></textarea>
            <input type="number" id="cantidad" max="100" onchange="generar_respuestas();">
            <fieldset>
                <legend>Respuestas</legend>
                <div id="respuestas">
                    
                </div>
            </fieldset>
            <input type="submit" value="guardar pregunta">
        </form>
    </div>
</fieldset>
<?php
require_once("includes/footer.php");
$mysqli->close();
?>