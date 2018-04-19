<?php 

	require_once 'vendor/autoload.php';
	use \Slim\Slim;
	use \ViewController\RainTpl;
	use \ViewController\SuperAdmin;
	use \Controller\model\{Usuario, Endereco};
	use \Controller\control\CrudController;


	$app = new Slim();

	$app->get("/",function ()
	{
		//echo $_SERVER["DOCUMENT_ROOT"];
		$rain = new RainTpl();
		$rain->draw("index");			
	});
	$app->get("/crud/usuario/select",function ()
	{	
		$usr = new Usuario();
		$usr->setIdusuario(10);
		$crud = new CrudController();
		$res = $crud->select($usr, false);
		$rain = new RainTpl();
		
		$rain->setConteudo(array("teste"),array(
			'usuario' => $res
		));
	});

	$app->post("/crud/usuario/insert",function()
	{
		$class = "Controller\model\\".ucfirst($_POST['tipo_usuario']);
		$usr = new $class();
		


		$end = new Endereco();

		foreach ($_POST as $key => $value) {
			$method = "set".ucfirst($key);
			//var_dump($method);
			if (method_exists($end, $method)) {
				$end->{$method}($value);
			}
			if (method_exists($usr, $method)) {
				//echo "Encontrou o método ". $method."()";
				$usr->{$method}($value);
			}	
		}

		$usr->setEndereco($end);

		$crud = new CrudController();
		$res = $crud->insert($usr);

		print_r($res);

		/*$end = new Endereco();
		$usr->setNome($_POST['nome']);
		$usr->setEmail($_POST['email']);
		$usr->setCpf($_POST['cpf']);
		$usr->setCelular($_POST['celular']);
		$usr->setFixo($_POST['fixo']);
		$usr->setStatus($_POST['status']);
		$usr->setNivel($_POST['nivel']);*/
		

	});

	$app->get("/crud/usuario/insert",function()
	{
		$funcionario = array(
			'funcionario' => array(
				'item' => 'bibliotecario'
			),
			array(
				'item' => 'professor'
			),
			array(
				'item' => 'coordenador'
			)
		);
		$formacao = array(
			'formacao' => array(
				'item' => "ensino superior"
			),
			array(
				'item' => "pos graduado"
			),
			array(
				'item' => "mestrado"
			)
		);
		
		$rain = new RainTpl();
		$rain->setConteudo(array("cadastro","scripts-cadastro-usuario"), array($funcionario, $formacao));
	});
	

	/*$app->get("/cadastro",function ()
	{	
		$rain = new RainTpl();
		$rain->setConteudo(array("cadastro"));	
	});*/
	

	$app->run();


 ?>