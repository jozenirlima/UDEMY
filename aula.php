<?php
# conexão com o Banco de Dados...
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "projeto_escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

/*#Criando tabelas
$query = "CREATE TABLE cursos(
    id_curso int not null auto_increment,
    nome varchar(255) not null,
    carga_horaria int not null,
    primary key(id_curso)
)";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (cursos)";
}else{
    echo "Erro ao executar (cursos)";
}

#Tabela Alunos (nome do aluno, data de nascimento)
$query = "CREATE TABLE alunos(
    id_aluno int not null auto_increment,
    nome varchar(255) not null,
    data_nascimento varchar(255) not null,
    primary key(id_aluno)
)";

$executar = mysqli_query($conexao, $query);

if($executar){
    echo "Executado com sucesso (alunos)<br>";
}else{
    echo "Erro ao executar (alunos)<br>";
}

#Tabela Alunos (nome do aluno, data de nascimento)

$query = "CREATE TABLE alunos_cursos(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
)";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (alunos_cursos)<br>";
}else{
    echo "Erro ao executar (alunos_cursos)<br>";
}


#Inseriando dados na tabela (alunos)
$query = "INSERT INTO alunos (nome, data_nascimento) VALUES('FRANCISCO JOZENIR GOMES DE LIMA','1968-10-19')";
$query = "INSERT INTO alunos_cursos (id_aluno, id_curso) VALUES (1, 1)";

$executar = mysqli_query($conexao, $query);

if($executar){
    echo "Executado com sucesso (Inserção)<br>";
}else{
    echo "Erro ao executar (Inserção)<br>";
}

if(mysqli_query($conexao, "DELETE FROM alunos WHERE id_aluno = 4")){
    echo "Apagado com sucesso";
}else {
    echo "Falha ao Apagar Dados";
}

if(mysqli_query($conexao, "UPDATE alunos SET nome = 'José Miguel' WHERE id_aluno = 1"));
*/

/* echo '<table border=1>
	<tr>
		<th>Número do Aluno</th>
		<th>Nome do Aluno</th>
		<th>Data de Nascimento</th>
	</tr>';

#Consulta com array
$consulta = mysqli_query($conexao, "SELECT * FROM alunos");
while ($linha = mysqli_fetch_array($consulta)){
	echo '<tr>';
	echo '<td>';
	echo $linha['id_aluno'];
	echo '</td>';
	echo '<td>';
	echo $linha['nome_aluno'];
	echo '</td>';
	echo '<td>';
	echo $linha['data_nascimento'];
	echo '</td>';
	echo '</tr>';

}

echo '</table>';
*/

$consulta = mysqli_query($conexao, "SELECT alunos.id_aluno, alunos.nome_aluno, cursos.id_curso, cursos.nome_curso FROM alunos, cursos, alunos_cursos WHERE alunos_cursos.id_aluno = alunos.id_aluno AND alunos_cursos.id_curso = cursos.id_curso;");

echo '<table border=1><tr><th>ID Aluno</th><th>Nome do Aluno</th><th>ID do Curso</th><th>Nome do Curso</th></tr>';
while($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['id_aluno'].'</td>';
    echo '<td>'.$linha['nome_aluno'].'</td>';
    echo '<td>'.$linha['id_curso'].'</td>';
    echo '<td>'.$linha{'nome_curso'}.'</td></tr>';
}

echo '</table>';
?>