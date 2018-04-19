<?php 
namespace Controller\model;

use Controller\model\Table;
/**
* 
*/
class Endereco extends Table
{
	
	private $rua;
	private $complemento;
	private $numero;
	private $bairro;
	private $cep;
	private $cidade;
	private $estado;

	public function getObject()
	{
		return get_object_vars($this);
	}
	public function getRua()
	{
		return $this->rua;
	}
	public function getComplemento()
	{
		return $this->complemento;
	}
	public function getNumero()
	{
		return $this->numero;
	}
	public function getBairro()
	{
		return $this->bairro;
	}
	public function getCep()
	{
		return $this->cep;
	}
	public function getCidade()
	{
		return $this->cidade;
	}
	public function getEstado()
	{
		return $this->estado;
	}
	public function setRua($value)
	{
		$this->rua = $value;
	}
	public function setComplemento($value)
	{
		$this->complemento = $value;
	}
	public function setNumero($value)
	{
		$this->numero = $value;
	}
	public function setBairro($value)
	{
		$this->bairro = $value;
	}
	public function setCep($value)
	{
		$this->cep = $value;
	}
	public function setCidade($value)
	{
		$this->cidade = $value;
	}
	public function setEstado($value)
	{
		$this->estado = $value;
	}
}


 ?>