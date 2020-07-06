<?php
Class Pessoa{
	private $pdo;
//CENEXÃO C O BANCO DE DADOS
//public function __construct($dbname, $host, $user, $senha)
{
	try{
		$this->pdo = new PDO ("mysql:host=localhost;dbname=crudpdo", "root", "");
	}
	catch (PDOException $e) {
		echo "Erro com banco de dados: ".$e->getMessage();
		}
	catch (Exception $e) {
		echo "ERRO GENERICO: ".$e->getMessage();
		}
}
//FUNÇÃO P BUSCAR DADOS E COLOCAR NO CANTO DIREITO DA TELA
	public function buscarDados()
{
	$res = array ();
	//Método query pois não tem nenhum parametro para passar 
	$cmd = $this->pdo->query ("SELECT * FROM  pessoa ORDER BY nome");	//prepare("SELECT * FROM pessoa ORDER BY id DESC ");
	$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}
}

?>