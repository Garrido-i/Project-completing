<!Doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>IURI GARRIDO | PEDRO HENRIQUE</title>
  </head>
  <body class="bg-dark text-light">
    <div class="container">
      <div class="jumbotron bg-warning">
        <h1>RELATÓRIO</h1>
      </div>
      <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>CLIENTE</th>
            <th>ROUPA</th>
            <th>PREÇO</th>
            <th>SITUAÇÃO</th>
            <th>DATA DE CADASTRO</th>
            <th>CPF</th>
          </tr>
        </thead>
        <tbody>
        
        <?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   ="compradb" ;
$user = "root";
$pass = "";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT titulo,descricao,id FROM vagas");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>

<html>
	<head>
	<title>Exemplo</title>
</head>
<body>
<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p><?=$linha['titulo']?> / <?=$linha['descricao']?></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if
	}
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>