<?php
require_once 'classe-pessoa.php';
//instâciar classe Pessoa
$p = new Pessoa("crudpdo","localhost","root","");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
<title> Cadastro Pessoa</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

	<section id="esquerda">
		<form>
			<h2>CADASTRAR PESSOA</h2>
			<label for="Nome">NOME</label>
			<input type="text" name="nome" id="nome"> 
			<label for="Telefone">TELEFONE</label>
			<input type="text" name="telefone" id="telefone"> 
			<label for="Email">EMAIL</label>
			<input type="text" name="email" id="email">
			<input type="submit" value="Cadastrar">
						
		</form>
	</section>
	<section id="direita">
	
	<table> 
	<tr id="titulo">
		<td>Nome</td>
		<td>Telefone</td>
		<td colspan="2">Email</td>
	</tr>
	
	<?php
		$dados = $p->buscarDados();
		if(count($dados) > 0)
		{
			for ($i=0; $i < count($dados); $i++) 
			{
				echo "<tr>";
				foreach ($dados [$i] as $k => $v)
				{
					if($k != "id")
					{
						echo "<td>".$v."</td>";
					}
				}
				?>
					<td><a href="">Editar</a><a href="">Excluir</a></td>
					
					<?php
			}	echo "</tr>";
		}
	?>

		<td><a href="">Editar</a><a href="">Excluir</a></td>

</table>
	
	
	</section>
</body>
</html>
