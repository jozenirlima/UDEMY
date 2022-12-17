<?php if(!isset($_GET['editar'])){ ?>
<h1 class="display-5">Inserir Novo Curso</h1>
<form class="form-control" action="processa_curso.php" method="POST">
    <label for="nome_curso">Curso:</label>
    <input class="form-control" type="text" name="nome_curso" placeholder="Insira o Nome do Curso">
    <br><br>
    <label for="carga_horaria">Carga Horária:</label>
    <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a Carga Horária">
    <br>
    <br>
    <input class="btn btn-success" type="submit" value="Inserir Curso">
</form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
        <?php if($linha['id_curso'] == $_GET['editar']){ ?>
            <h1 class="display-5">Editar Curso</h1>
            <form class="form-control" action="edita_curso.php" method="POST">
                <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
                <label for="nome_curso">Nome Curso:</label>
                <input class="form-control" type="text" name="nome_curso" placeholder="Insira o Nome do Curso" value="<?php echo $linha['nome_curso'];?>">
                <br><br>
                <label for="carga_horaria">Carga Horária:</label>
                <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a Carga Horária" value="<?php echo $linha['carga_horaria'];?>">
                <br>
                <br>
                <input class="btn btn-primary" type="submit" value="Editar Curso">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>