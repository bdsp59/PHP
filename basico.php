<?php
	/*Para variáveis em PHP, não é necessário declara o tipo da variável.*/
	$nome = "Bruno";//Para atribuir um valor a uma variavel devemos colocar ($NomedaVariavel = valor_da_variavel) que ele já transformar a variavel no tipo certo, desde que se obedeça que strings vem entre aspas "", int são números sem nada 11, float são números com decimais que precisam de ponto 11.2, boolean podem ser apenas true e false;
	echo $nome;//Escreve o valor da variavel
	echo "<br/>";
	$sobrenome = "Proença";
	$nomeCompleto = $nome . " " . $sobrenome;//A concatenção de strings é feita através de pontos;
	echo $nomeCompleto;
	echo "<br/>";
	var_dump($nome);//Escreve o valor da variavel, o tipo e o tamanho de memória usado;
	echo $nome;
	unset($nome);//Limpa aquela variável do valor que ele possuia, ela não existe mais na memória;
	if(isset($nome)){//isset serve para conferir se a variável nome está com algum valor 
		echo $nome;
		echo "<br/>";
	}else{
		echo "Não há nada na variável nome";
		echo "<br/>";
	}

	/////////////////////////////////////////////////////////////////

/*Tipos de dados:
	Tipos básicos:
		String; 
		Número; 
		Número com ponto flutuante; 
		Booleano;

	Tipos compostos:
		Array -> $nome_da_variavel = array(elementos do array separados por virgula) / para chamar um elemento do array, colocamos echo $nome_da_variavel[posição];
		DateTime() -> É uma classe que tem como objetivo pegar alguma data, se não especificar vai pegar a data de agora;

	Variáveis Pré-definidas(Arrays super globais):
		São variáveis internas do PHP que já vem com alguns recursos, ($_POST(), $_GET()).
		$_GET["nome_da_chave"] -> Array super global, como é um array tem que se passar a posição, neste caso a posição será passada pelo nome_da_chave. O $_GET[] vai buscar o valor que vai estar dentro do conchetes na URL, que deve ser dividida da seguinte forma (endereço_da_página?variáveis(nome_da_chave) = valor_da_variável), caso haja mais de uma variável a ser pega no GET devemos usar o & para separar as variáveis. Sempre vai receber uma String, para ser número ou outro tipo deve ser convertido.
		Para se converter uma variável deve-se dizer o tipo que você deseja que ele seja, exemplo (int)$_GET["nome_da_chave"], com isso o texto que viria com o GET virá um int.
		Para pegar o IP do usuario utilizaremos o comando $_SERVER["REMOTE_ADDR"] -> Neste caso, passa o IP de quem acessou o site, mas precisa que o site esteja conectado a um servidor;
		Para pegar o IP do usuario utilizaremos o comando $_SERVER["SCRIPT_NAME"] -> Neste caso, passa o endereço e a hora da página que foi acessado pelo IP, por exemplo o log de um funcionário;

-----------------------------------------------------------------------------------------------------------------------------------			

	Escopo de um variável -> Até onde é a área de atuação de uma variável. Para que uma variável seja considerada global, apesar de estar dentro de uma função temos que primeiro declara-la como global e depois atribuir o valor a ela, exemplo:
		function setMessage(){
			global $message;
			$message = 'Hello World';
		}

------------------------------------------------------------------------------------------------------------------------------------------

	Operadores em PHP:
		-Atribuição: = ;
		-Concatenação : . ;
		-Composto: .= (faz com que a variável receba o valor dela mesmo concatenado com o valor depois do igual) / += (faz com que o valor da variável seja somado ao valor depois do igual) / -= (faz com que o valor da variável seja subtraido ao valor depois do igual) / *= (faz com que o valor da variável seja multiplicado ao valor depois do igual)
		-Aritméticos: + / - / * / (/(divisão)) / %(resto) / **(exponencial);
		-Comparação: > / < / == (compara valor) / === (compara valor e tipo da variável - identidade) / != (compara valor) / !== (compara valor e tipo da variável - identidade) / <=> (compara os termos e recebe o resultado da seguinte forma: 1 se o termo da esquerda for maior, 0 se forem iguais, -1 se o termo da direito for maior) / ?? (comando que compara vários valores e ignora aqueles que possuem o valor NULL, sendo assim só exibe o primeiro valor não nulo;
		-Ingremento e degremento(se for antes do nome da variável ele soma/subtrai antes de imprimir, se for depois do nome da variável ele soma/subtrai depois de imprimir): ++ / --;
		-Lógico: && / ||

---------------------------------------------------------------------------------------------------------------------------------------

	Strings:
		- Diferença entre aspas duplas e aspas simples: Se utilizarmos as aspas simples para escrever na tela com o 'echo', o texto vai ser impresso como está escrito sem verificar se algum deles é uma variável e se tem algum valor associado. Já nas aspas duplas podemos colocar a variável no meio do texto contido nas aspas duplas que ele mesmo já será convertido para o valor da variável (interpolação de variável);
		- Colocar todo o texto em maiúsculo: strtoupper(variável);
		- Colocar todo o texto em minusculo: strtolower(variável);
		- Colocar a primeira letra em maiúsculo: ucfirst(variável);
		- Colocar a primeira letra de cada palavra em maiúsculo: ucwords(variável);
		- Trocar as posições das letras da palara: str_replace("qual caractér deseja trocar","por qual caractér deseja trocar", variável);
		- Procurar algo especifíco dentro da String: strpos(variável, "o que desejo encontrar");
		- Para pegar só uma parte da String: substr(variável, posição inicial, posição final);
		- Quantidade de caracteres da String: strlen(variável);
		
----------------------------------------------------------------------------------------------------------------------------------------

	Include: Serve para buscar outras informações ou funções, em outros arquivos PHP, para serem usados em outros arquivos PHP -> include "nome_do_arquivo". Dá acesso ao include.PATH;
	Require: Faz a mesma função que o include, mas com algumas diferenças. O require exige que o arquivo exista e que esteja funcionando.
*/

	
?>
































