<?php 
namespace ViewController;
use Rain\Tpl;
	/**
	* 
	*/
class RainTpl extends Tpl
{
	
	protected $tpl;
	private $caminho = "vendor/libraryitego/WebContent/view";

	protected $config = array(
		"tpl_dir" => "vendor/libraryitego/WebContent/view/",
		"cache_dir" => "vendor/libraryitego/WebContent/cache/"
	);
	/*protected $menu = array(
		"menu" => array(
				 array(
					"item" => "Acervo", "link" => "/acervo", "dropdown" => "", "toggle" => "", "selected" => false
				),
				 array(
				 	"item" => "Conta", "link" => "/#", "dropdown" => "dropdown", "toggle" => "dropdown-toggle", "selected" => true,
					"submenu" => array(
						array("subitem" => "Cadastre-se", "sublink" => "/cadastro"),
						array("subitem" => "login" , "sublink" => "/login" ),
					)
				 )

		)
	);*/

	/*protected $menu_usuario_comum = array(
		"menu_usuario_comum" => array(
				 array(
					"item" => "Acervo", "link" => "/acervo", "dropdown" => "", "toggle" => "", "selected" => false
				),
				 array(
				 	"item" => "Empréstimo", "link" => "/emprestimo", "dropdown" => "", "toggle" => "", "selected" => false
					
				 ),
				  array(
				 	"item" => "Conta", "link" => "/#", "dropdown" => "dropdown", "toggle" => "dropdown-toggle", "selected" => true,
					"submenu" => array(
						array("subitem" => "Editar", "sublink" => "/editar"),
						array("subitem" => "Desativar" , "sublink" => "/desativar" ),
					)
				 ),
				  array(
				 	"item" => "Sair", "link" => "/index", "dropdown" => "", "toggle" => "", "selected" => false
					
				 ),
				  

		)
	);*/
	
	/*protected $menu_adm_secundario = array(
		"menu_adm_secundario" => array(
				 array(
					"item" => "Acervo", "link" => "/acervo", "dropdown" => "", "toggle" => "", "selected" => false
				),
				 array(
				 	"item" => "Empréstimo", "link" => "/emprestimo", "dropdown" => "", "toggle" => "", "selected" => false
					
				 ),
				  array(
				 	"item" => "Relatórios", "link" => "/relatorios", "dropdown" => "", "toggle" => "", "selected" => false
					
				 ),
				  array(
				 	"item" => "Usuário", "link" => "/#", "dropdown" => "dropdown", "toggle" => "dropdown-toggle", "selected" => true,
					"submenu" => array(
						array("subitem" => "Inserir", "sublink" => "/usuario/cadastro"),
						array("subitem" => "Editar", "sublink" => "/usuario/editar"),
						array("subitem" => "Desativar" , "sublink" => "/usuario/desativar" )
					)
				 ),
				  array(
				 	"item" => "Livro", "link" => "/#", "dropdown" => "dropdown", "toggle" => "dropdown-toggle", "selected" => true,
					"submenu" => array(
						array("subitem" => "Inserir", "sublink" => "/livro/inserir"),
						array("subitem" => "Editar", "sublink" => "/livro/editar"),
						array("subitem" => "Desativar" , "sublink" => "/livro/desativar" )
					)
				 ),
				  array(
				 	"item" => "Curso", "link" => "/#", "dropdown" => "dropdown", "toggle" => "dropdown-toggle", "selected" => true,
					"submenu" => array(
						array("subitem" => "Inserir", "sublink" => "/curso/inserir"),
						array("subitem" => "Editar", "sublink" => "/curso/editar"),
						array("subitem" => "Sair" , "sublink" => "/curso/sair" )
					)
				 )
				  
				  
		)
	);*/

		protected $menu = array(
		"menu" => array(
				 array(
					"item" => "Acervo", "link" => "/acervo", "dropdown" => "", "toggle" => "", "selected" => false
				),
				 array(
				 	"item" => "Empréstimo", "link" => "/emprestimo", "dropdown" => "", "toggle" => "", "selected" => false
					
				 ),
				 array(
				 	"item" => "Relatórios", "link" => "/relatorios", "dropdown" => "", "toggle" => "", "selected" => false
					
				 ),
				  array(
				 	"item" => "Usuário", "link" => "/#", "dropdown" => "dropdown", "toggle" => "dropdown-toggle", "selected" => true,
					"submenu" => array(
						array("subitem" => "Inserir", "sublink" => "/crud/usuario/insert"),
						array("subitem" => "Editar", "sublink" => "/conta/editar"),
						array("subitem" => "Desativar" , "sublink" => "/conta/desativar" ),
						array("subitem" => "Nível de Acesso" , "sublink" => "/conta/nivel" )
					)
				 ),
				  array(
				 	"item" => "Livro", "link" => "/#", "dropdown" => "dropdown", "toggle" => "dropdown-toggle", "selected" => true,
					"submenu" => array(
						array("subitem" => "Inserir", "sublink" => "/livro/inserir"),
						array("subitem" => "Editar", "sublink" => "/livro/editar"),
						array("subitem" => "Desativar" , "sublink" => "/livro/desativar" )
					)
				 ),
				  array(
				 	"item" => "Curso", "link" => "/#", "dropdown" => "dropdown", "toggle" => "dropdown-toggle", "selected" => true,
					"submenu" => array(
						array("subitem" => "Inserir", "sublink" => "/curso/inserir"),
						array("subitem" => "Editar", "sublink" => "/curso/editar"),
						array("subitem" => "Desativar" , "sublink" => "/curso/desativar" )
					)
				 ),
				  array(
				 	"item" => "Sair", "link" => "/index", "dropdown" => "", "toggle" => "", "selected" => false
					
				 )
				  

		)
	);

	function __construct()
	{
		$this->tpl = new Tpl();
		$this->tpl->configure($this->config);
		
		//$this->setData($this->menu);
		//$this->setData($this->menu_usuario_comum);
		//$this->setData($this->menu_adm_secundario);
		$this->setData($this->menu);
		$this->setTpl(array("head", "header","scripts"));
		
		
	}
	protected function setTpl($template = array()){
		foreach ($template as $key => $value) {
			$this->tpl->draw($value);

		}
	}
	public function setData($dados = array()){
		foreach ($dados as $key => $value) {
			$this->tpl->assign($key, $value);
		}		
	}
	public function setDataSelect($dados = array())
	{
		foreach ($dados as $key => $value) {
			$this->setData($key, $value);
		}
	}
	public function setConteudo($value = array(), $data = array())
	{
		$this->setData($data);
		$this->setTpl($value);
	}
	
	function __destruct(){

		$this->setTpl(array("footer"));
	
	}
	
	
}


 ?>