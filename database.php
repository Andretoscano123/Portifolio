<?php

	$nome	= $_POST["nomeAtividade"];
	$link	= $_POST["linkAtividade"];
	$data	= $_POST["data"];
	
	if(isset($_FILES["arquivo"])){
		$x = strtolower (substr($_FILES['arquivo']['name'],-4));
		$NewName = $nome . $x;
		$pasta = '_arquivos/';
		
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $pasta.$NewName);
	}else{
		header("Location:index.php");
	}
	
	$arquivo = $pasta.$NewName;
	
	if(!file_exists("_db/ptfdatas.xml")){
		$xml = 
"<?xml version = '1.0' encoding = 'utf-8' ?>

	<portifolio>
		<atividade>
			<nome>$nome</nome>
			<url>$link</url>
			<data>$data</data>
			<arquivo>$arquivo</arquivo>
		</atividade>	
	</portifolio>
";

	file_put_contents("_db/ptfdatas.xml", $xml);
	}else{
		$xml = simplexml_load_file("_db/ptfdatas.xml");
		
		
		$att = $xml->addChild("atividade");
		
		$att->addChild("nome", $nome);
		$att->addChild("url", $link);
		$att->addChild("data", $data);
		$att->addChild("arquivo", $arquivo);
		
		file_put_contents("_db/ptfdatas.xml", $xml->asXML());
	}
	
	header("Location:list-portfolio.php");
?>