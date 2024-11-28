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
		$this->idveiculo = $idveiculo;
	}
	public function getIdUsuario()
	{
		return $this->getIdUsuario;
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->tipo = $email;
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
