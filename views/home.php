<?php 
    if(isset($_GET['erro'])){ ?>
        <div class="alert alert-danger" role="alert">
            Usuário e/ou senha inválidos!
        </div>
<?php } ?>

<h1>Bem vindo a InTECH - Cursos de Informática!</h1>

<h2 style="text-align: center;">Login do Usuário</h2>
<form class="form-control" action="login.php" method="POST">
    <label for="usuario">Nome do Usuário</label>
    <input class="form-control" type="text" name="usuario" placeholder="Digite o nome do usuário">
    <label for="senha">Senha do Usuário</label>
    <input class="form-control" type="password" name="senha" placeholder="Digite a Senha">
    <input type="submit" value="Entrar" class="btn btn-success">
</form>