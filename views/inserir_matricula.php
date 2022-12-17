<h1 class="display-5">Inserir Nova Matrícula</h1>
<form class="form-control" action="processa_matricula.php" method="POST">
    <p><strong>Selecione o Aluno:</strong></p>
    <select class="form-select" name="escolha_aluno">
        <option>Selecione um aluno</option>
        <?php
            while ($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
                
            }
        ?>

    </select>
    <br><br>
    <p><strong>Selecione o Curso:</strong></p>
    <select class="form-select" name="escolha_curso">
    <option>Selecione um curso</option>
        <?php
            while ($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
                
            }
        ?>

    </select>
    <br>
    <br>
    <input class="btn btn-primary" type="submit" value="Inserir Matricula">
</form>
