<?php
namespace Controller\model;
use Controller\model\{Table, Endereco};

	/**
	* 
	*/
	class Usuario extends Table{
		
		private $idusuario;
		private $nome;
		private $email;
		private $cpf;
		private $celular;
		private $fixo;
		private $status;
		private $nivel; //Nivel de Acesso do usuário.
		private $endereco;

		public function getObject()
		{
			return get_object_vars($this);
		}	
		/*public function infoObject()
		{
			return array(
				'idusuario' => "int",
				'nome' => "string",
				'email' => "string",
				'cpf' => "string",
				'celular' => "double",
				'fixo'=> "double",
				'status' => "bool",
				'nivel'=> "int",
				'endereco'=> "Endereco"
			);
		}*/	
		public function getNome(){
			return $this->nome;
		}
		public function getIdusuario(){
			return $this->idusuario;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getCelular(){
			return $this->celular;
		}
		public function getFixo(){
			return $this->fixo;
		}
		public function getStatus(){
			return $this->status;
		}
		public function getNivel(){
			return $this->nivel;
		}
		public function getEndereco(): Endereco{
			return $this->endereco;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}
		public function setIdusuario(int $idusuario){
			$this->idusuario = $idusuario;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function setCpf($cpf){
			$this->cpf = $cpf;
		}
		public function setCelular($celular){
			$this->celular = $celular;
		}
		public function setFixo($fixo){
			$this->fixo = $fixo;
		}
		public function setStatus($status){
			$this->status = $status;
		}
		public function setNivel($nivel){
			$this->nivel = $nivel;
		}
		public function setEndereco(Endereco $endereco){
			$this->endereco = $endereco;
		}

	}
?>