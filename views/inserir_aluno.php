<?php if(!isset($_GET['editar'])){ ?>
<h1 class="display-5">Inserir Novo Aluno</h1>
<form class="form-control" action="processa_aluno.php" method="POST">
    <label for="nome_aluno">Aluno:</label>
    <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o Nome do Aluno">
    <br><br>
    <label for="data_nascimento">Data Nascimento:</label>
    <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a Data de Nascimento">
    <br>
    <br>
    <input class="btn btn-success" type="submit" value="Inserir Aluno">
</form>

    <?php } else { ?>
        <?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
            <?php if($linha['id_aluno'] == $_GET['editar']){ ?>
                <h1 class="display-5">Editar Aluno</h1>
                    <form class="form-control" action="edita_aluno.php" method="POST">
                        <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
                        <label for="nome_aluno">Aluno:</label>
                        <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o Nome do Aluno" value="<?php echo $linha['nome_aluno'];?>">
                        <br><br>
                        <label for="data_nascimento">Data Nascimento:</label>
                        <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a Data de Nascimento" value="<?php echo $linha['data_nascimento'];?>">
                        <br>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Editar Aluno">
                    </form>
            <?php } ?>
        <?php } ?>
    <?php } ?>