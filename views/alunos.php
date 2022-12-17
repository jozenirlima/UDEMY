<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir Novo Aluno</a>
<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr>
            <th>ID do Aluno</th>
            <th>Nome do Aluno</th>
            <th>Data de Nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while ($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<tr><td>'.$linha['id_aluno'].'</td>';
                echo '<td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['data_nascimento'].'</td>';
        ?>
            <td><a class="btn btn-warning" href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno'];?>">Editar</a></td>
            <td><a class="btn btn-danger" href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno'];?>">Deletar</a></td></tr>

            <?php

            }
        ?>

    </tbody>
</table>