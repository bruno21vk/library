<?php
namespace Controller\model;
	/**
	create table livro( idlivro int AUTO_INCREMENT not null primary key, 
	isbn text not null, 
	titulo text not null, 
	autor text not null, 
	editora text not null )
	*/
	class Livro extends Table{
		
		private $idlivro;
		private $isbn;
		private $titulo;
		private $autor;
		private $editora;

		public function getObject()
		{
			return get_object_vars($this);
		}
		public function getIdlivro(): String{
			return $this->idlivro;
		}
		public function getTitulo(): String{
			return $this->titulo;
		}
		public function getIsbn(): String{
			return $this->isbn;
		}
		public function getAutor(): String{
			return $this->autor;
		}
		public function getEditora(): String{
			return $this->editora;
		}
		public function setIdlivro($idlivro)
		{
			$this->idlivro = $idlivro;
		}
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		public function setIsbn($isbn){
			$this->isbn = $isbn;
		}
		public function setAutor($autor){
			$this->autor = $autor;
		}
		public function setEditora($editora){
			$this->editora = $editora;
		}
	}
?>