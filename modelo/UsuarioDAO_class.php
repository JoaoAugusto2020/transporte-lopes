<?php
include_once("ConnectionFactory_class.php"); //PDO
include_once("usuario_class.php"); //entidade

class UsuarioDAO
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
	public function cadastrar($usuario)
	{
		try {
			$stmt = $this->con->prepare(
				"INSERT INTO usuario(email, cpf, nomeCompleto, senha)
				VALUES (:email, :cpf, :nomeCompleto, :senha)"
			);
			//:nome - é uma âncora e será ligado pelo bindValue
			//SQL injection
			//ligamos as âncoras aos valores de veiculo
			$stmt->bindValue(":email", $usuario->getEmail());
			$stmt->bindValue(":cpf", $usuario->getCpf());
			$stmt->bindValue(":nomeCompleto", $usuario->getnomeCompleto());
			$stmt->bindValue(":senha", $usuario->getSenha());

			$stmt->execute(); //execução do SQL	
			/*$this->con->close();
				$this->con = null;*/
		} catch (PDOException $ex) {
			echo "Erro: " . $ex->getMessage();
		}
	}

	//alterar
	public function alterar($usuario)
	{
		try {
			$stmt = $this->con->prepare(
				"UPDATE usuario SET 
				email=:email, 
				cpf = :cpf, 
				nomeCompleto=:nomeCompleto,
                senha=:senha WHERE
				idUsuario=:idUsuario"
			);

			//ligamos as âncoras aos valores de veiculo
            $stmt->bindValue(":idUsuario", $usuario->getIdUsuario());
			$stmt->bindValue(":email", $usuario->getEmail());
			$stmt->bindValue(":cpf", $usuario->getCpf());
			$stmt->bindValue(":nomeCompleto", $usuario->getNomeCompleto());
			$stmt->bindValue(":senha", $usuario->getSenha());

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
	public function excluir($usuario)
	{
		try {
			$num = $this->con->exec("DELETE FROM usuario WHERE idUsuario = " . $usuario->getIdUsuario());
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
				$dados = $this->con->query("SELECT * FROM usuario");
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
				$u = new Usuario();
				$u->setIdUsuario($linha["idUsuario"]);
				$u->setEmail($linha["email"]);
				$u->setCpf($linha["cpf"]);
				$u->setNomeCompleto($linha["nomeCompleto"]);
				$u->setSenha($linha["senha"]);
                $lista[] = $u;
			}
			return $lista;
		} catch (PDOException $ex) {
			echo "Erro: " . $ex->getMessage();
		}
	}

	//exibir 
	public function exibir($idUsuario)
	{
		try {
			$lista = $this->con->query("SELECT * FROM usuario WHERE idUsuario = " . $idUsuario);

			/*$this->con->close();
				$this->con = null;*/

			$dado = $lista->fetchAll(PDO::FETCH_ASSOC);

			$u = new Usuario();
			$u->setIdUsuario($dado[0]["idUsuario"]);
			$u->setEmail($dado[0]["email"]);
			$u->setCpf($dado[0]["cpf"]);
			$u->setNomeCompleto($dado[0]["nomeCompleto"]);

			return $v;
		} catch (PDOException $ex) {
			echo "Erro: " . $ex->getMessage();
		}
	}
}
