<?php
include_once("ConnectionFactory_class.php"); //PDO
include_once("Veiculo_class.php"); //entidade

class VeiculoDAO
{
	//DAO - Data Access Object	
	//CRUD - Creat, Read, Update e Delete
	//operações básicas de banco de dados

	public $con = null; //obj recebe conexão

	public function __construct()
	{
		$conF = new ConnectionFactory();
		$this->con = $conF->getConnection();
	}

	//cadastrar
	public function cadastrar($veic)
	{
		try {
			$stmt = $this->con->prepare(
				"INSERT INTO veiculo(nome, marca, tipo, capacidade, locacao)
				VALUES (:nome, :marca, :tipo, :capacidade, :locacao)"
			);
			//:nome - é uma âncora e será ligado pelo bindValue
			//SQL injection
			//ligamos as âncoras aos valores de veiculo
			$stmt->bindValue(":nome", $veic->getNome());
			$stmt->bindValue(":marca", $veic->getMarca());
			$stmt->bindValue(":tipo", $veic->getTipo());
			$stmt->bindValue(":capacidade", $veic->getCapacidade());
			$stmt->bindValue(":locacao", $veic->getLocacao());

			$stmt->execute(); //execução do SQL	
			/*$this->con->close();
				$this->con = null;*/
		} catch (PDOException $ex) {
			echo "Erro: " . $ex->getMessage();
		}
	}

	//alterar
	public function alterar($veic)
	{
		try {
			$stmt = $this->con->prepare(
				"UPDATE veiculo SET 
				nome=:nome,
				marca=:marca,
				tipo=:tipo, 
				capacidade = :capacidade,
				locacao=:locacao
				WHERE
				idveiculo=:idveiculo"
			);

			//ligamos as âncoras aos valores de veiculo
			$stmt->bindValue(":nome", $veic->getNome());
			$stmt->bindValue(":marca", $veic->getMarca());
			$stmt->bindValue(":tipo", $veic->getTipo());
			$stmt->bindValue(":capacidade", $veic->getCapacidade());
			$stmt->bindValue(":locacao", $veic->getLocacao());
			$stmt->bindValue(":idveiculo", $veic->getIdveiculo());

			$this->con->beginTransaction();
			$stmt->execute(); //execução do SQL	
			$this->con->commit();
			/*$this->con->close();
				$this->con = null;*/
		} catch (PDOException $ex) {
			echo "Erro: " . $ex->getMessage();
		}
	}
	//excluir
	public function excluir($veic)
	{
		try {
			$num = $this->con->exec("DELETE FROM veiculo WHERE idveiculo = " . $veic->getIdveiculo());
			//numero de linhas afetadas pelo comando

			if ($num >= 1) {
				return 1;
			} else {
				return 0;
			}
		} catch (PDOException $ex) {
			echo "Erro: " . $ex->getMessage();
		}
	}

	//listar
	public function listar($query = null)
	{
		//se não recebe parâmetro (ou seja, uma consulto personalizada)
		//$query recebe nulo
		try {
			if ($query == null) {
				$dados = $this->con->query("SELECT * FROM veiculo");
				//dataset (conjunto de dados) com todos os dados
				//query() é função PDO, executa SQL
			} else {
				$dados = $this->con->query($query);
				//se listar receber parâmetro este será uma SQL 
				//SQL específica
			}
			$lista = array(); //crio chamando função array()

			/*for($i = 0; $i<$dados.lenght; $i++){
				$c->setNome($dados[i][1]);
			}*/
			
			foreach ($dados as $linha) {
				//percorre linha a linha de dados e coloca cada registro
				//na variável linha (que é um vetor)
				$v = new Veiculo();
				$v->setIdveiculo($linha["idveiculo"]);
				$v->setNome($linha["nome"]);
				$v->setMarca($linha["marca"]);
				$v->setTipo($linha["tipo"]);
				$v->setCapacidade($linha["capacidade"]);
				$v->setLocacao($linha["locacao"]);
				$lista[] = $v;
			}
			return $lista;
			
		} catch (PDOException $ex) {
			echo "Erro: " . $ex->getMessage();
		}
	}

	//exibir 
	public function exibir($idveiculo)
	{
		try {
			$lista = $this->con->query("SELECT * FROM veiculo WHERE idveiculo = " . $idveiculo);

			/*$this->con->close();
				$this->con = null;*/

			$dado = $lista->fetchAll(PDO::FETCH_ASSOC);

			$v = new Veiculo();
			$v->setIdveiculo($dado[0]["idveiculo"]);
			$v->setNome($dado[0]["nome"]);
			$v->setMarca($dado[0]["marca"]);
			$v->setTipo($dado[0]["tipo"]);
			$v->setCapacidade($dado[0]["capacidade"]);
			$v->setLocacao($dado[0]["locacao"]);

			return $v;
			
		} catch (PDOException $ex) {
			echo "Erro: " . $ex->getMessage();
		}
	}
}
