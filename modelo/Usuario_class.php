<?php
class Usuario
{
	//classe entidade	
    private $idUsuario;
	private $email;
	private $cpf;
	private $nomeCompleto;
	private $senha;

	public function __construct() {}

	public function setIdUsuario($idUsuario)
	{
		$this->idUsuario = $idUsuario;
	}
	public function getIdUsuario()
	{
		return $this->idUsuario;
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getCpf()
	{
		return $this->cpf;
	}
	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}

	public function getNomeCompleto()
	{
		return $this->nomeCompleto;
	}
	public function setNomeCompleto($nomeCompleto)
	{
		$this->nomeCompleto = $nomeCompleto;
	}

    public function getSenha()
	{
		return $this->senha;
	}
	public function setSenha($senha)
	{
		$this->senha = $senha;
	}
}
