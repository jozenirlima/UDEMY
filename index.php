<?php
#Iniciar Sessão
session_start();

#Base de Dados
include 'db.php';

#Cabeçalho
include 'header.php';

#Conteúdo da Página
if(isset($_SESSION['login'])){
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }else{
        $pagina = 'cursos';
    }    
} else{
    $pagina = 'home';
}

switch($pagina){
    case 'alunos': include 'views/alunos.php';break;
    case 'inserir_aluno': include 'views/inserir_aluno.php';break;
    case 'cursos': include 'views/cursos.php';break;
    case 'inserir_curso': include 'views/inserir_curso.php';break;
    case 'edita_curso': include 'edita_curso.php';break;
    case 'matriculas': include 'views/matriculas.php';break;
    case 'inserir_matricula': include 'views/inserir_matricula.php';break;
    default: include 'views/home.php';break;
}

/*$pagina = $_GET['pagina'];
if($pagina == 'alunos'){
    include 'views/alunos.php';
}elseif($pagina == 'inserir_aluno'){
    include 'views/inserir_aluno.php';
}elseif($pagina == 'cursos'){
    include 'views/cursos.php';
}elseif($pagina == 'inserir_curso'){
    include 'views/inserir_curso.php';
}elseif($pagina == 'matriculas'){
    include 'views/matriculas.php';
}elseif($pagina == 'inserir_matricula'){
    include 'views/inserir_matricula.php';
}else {
    include 'views/home.php';
}
*/

#Rodapé
include 'footer.php';

?>