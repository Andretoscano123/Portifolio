<!DOCTYPE html>

<html lang='pt-br'>
	
	<head>
		<meta charset="UTF-8"/>
		<title>PORTIFOLIO - CADASTRO DE ATIVIDADE</title>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<link rel="stylesheet" href="_css/formulario.css"/>
	</head>
	
	<body>

		<header class="cabecalho">
			<h1>PORTIFOLIO DO ANDRÉ</h1>
			<nav>
					<div id="guardar">
						<a href="index.php"><img src="_img/icone1.png"></a>
					</div>

					<div id="listar">
						<a href="list-portfolio.php"><img src="_img/icone2.png"></a>
					</div>
			</nav>
		</header>
		<figure class="subtitle">
			<img src="_img/fundo.jpg"/>
			<figcaption>PORTEFÓLIO</figcaption>
		</figure>

		<div class="form-container">
			<h2>Formulário de Registro de Atividade</h2>
			<form action="database.php" method="post" enctype="multipart/form-data">
				<p>
					<label>Nome:</label>
					<input type="text" name="nomeAtividade" required="required"/>
				</p>
				<p>
					<label>Link:</label>
					<input type="text" name="linkAtividade" requried="required"/>
				</p>
				<p>
					<label>Data:</label>
					<input type="date" name="data" required="required"/>
				</p>
				<p>
					<label class="fileContainer">
						Escolha um Arquivo(.zip)
						<input type="file" name="arquivo"/>
					</label>
				</p>
				<input type="submit" value="Registrar Atividade"/>
			</form>
		</div>
	</body>
	
</html>