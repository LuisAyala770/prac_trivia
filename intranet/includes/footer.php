</div>
</aside>
</article>
<section>
    <nav>
        <ul>
            <?php
            $resultado = $mysqli->query("SELECT * FROM categorias order by id_cate desc"); //Result
            while ($fila = $resultado->fetch_assoc()) {
                echo "<li><a href=''>" . $fila['categoria'] . "</a></li>";
                //echo $fila['id_cate'] . " " . $fila['categoria'] . "<br>";
            }
            ?>
        </ul>
    </nav>
</section>
</main>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<footer>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nueva_categoria.php">Nueva Categoria</a></li>
            <li><a href="nueva_pregunta.php">Nueva Pregunta</a></li>
            <li><a href="../index.php">Jugar</a></li>
        </ul>
    </nav>
</footer>

</html>