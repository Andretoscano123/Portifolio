<!DOCTYPE html>

<html lang='pt-br'>

	<head>
		<meta charset="UTF-8"/>
		<title>portifolio - cadastro de atividade</title>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<link rel="stylesheet" href="_css/tabela.css"/>
	</head>
	
	
	<body>

		<header class="cabecalho">
			<h1>PORTIFOLIO DO ANDRE</h1>
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
	
		<div>
			<table>
				<thead>
					<tr>
						<th class="x">Nome da  Atividade</th>
						<th>Data</th>
						<th>Download</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						if(file_exists("_db/ptfdatas.xml")){
							
							$xml = simplexml_load_file("_db/ptfdatas.xml");
						
							foreach($xml->children() as $ptf){
								echo"<tr>";
									echo"<td class='y'><a href='".$ptf->link."'/>$ptf->nome</a></td>";
									echo"<td>$ptf->data</td>";
									echo"<td><a href='$ptf->arquivo' download>Download</a></td>";
								echo"</tr>";
							}
							
							
						}else{
							header("Location:index.php");
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
	
</html>