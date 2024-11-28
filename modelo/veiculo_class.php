<?php
class Veiculo
{
	//classe entidade	
	private $idveiculo;
	private $nome;
	private $tipo;
	private $capacidade;
	private $marca;
	private $locacao;

	public function __construct() {
		$locacao = "Disponível";
	}

	public function setIdveiculo($idveiculo)
	{
		$this->idveiculo = $idveiculo;
	}
	public function getIdveiculo()
	{
		return $this->idveiculo;
	}
	//demais getters e setters

	public function getNome()
	{
		return $this->nome;
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getTipo()
	{
		return $this->tipo;
	}
	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}

	public function getCapacidade()
	{
		return $this->capacidade;
	}
	public function setCapacidade($capacidade)
	{
		$this->capacidade = $capacidade;
	}

	public function getMarca()
	{
		return $this->marca;
	}
	public function setMarca($marca)
	{
		$this->marca = $marca;
	}

public function getLocacao()
	{
		return $this->locacao;
	}
	public function setLocacao($locacao)
	{
		$this->locacao = $locacao;
	}
}
