<?php

	$conexao = new mysqli('localhost','root','','valorartistico');

	$conexao-> set_charset('utf8');

		if($conexao == FALSE){

			echo"Erro! Falha na conexao com o Banco de Dados!";
				
		} 