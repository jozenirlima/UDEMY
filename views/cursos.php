<a class="btn btn-success" href="?pagina=inserir_curso">Inserir Novo Curso</a>
<table class="table table-hover table-striped" id="cursos">
    <thead>
        <tr>
            <th>ID do Curso</th>
            <th>Nome do Curso</th>
            <th>Carga Horária</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while ($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<tr><td>'.$linha['id_curso'].'</td>';
                echo '<td>'.$linha['nome_curso'].'</td>';
                echo '<td>'.$linha['carga_horaria'].'</td>';
            ?>
            <td><a class="btn btn-warning" href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso'];?>">Editar</a></td>
            <td><a class="btn btn-danger" href="deleta_curso.php?id_curso=<?php echo $linha['id_curso'];?>">Deletar</a></td></tr>

            <?php

            }
        ?>
    </tbody>
</table>