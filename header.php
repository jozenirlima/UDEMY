<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de Informática</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <header class="navbar navbar-expand bg-gradient text-white">
        <div class="container">
            <a href="?pagina=home">
                <img src="./imagens/logo_intech_01.png" alt="Logo" title="logo" ></a>
            <div class="navbar navbar-brand">
                <a class="nav-link text-white" href="?pagina=alunos">Alunos</a>
                <a class="nav-link text-white" href="?pagina=cursos">Cursos</a>
                <a class="nav-link text-white" href="?pagina=matriculas">Matrículas</a>
                <?php 
                    if(isset($_SESSION['login'])){ ?>
                    <a href="logout.php">
                        <?php echo $_SESSION['usuario']; ?>
                        (Sair)
                    </a>
                    <?php } ?>
            </div>
            
        </div>
    </header>

    <div class="container mt-5">
</body>
</html>