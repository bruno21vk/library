<?php 
namespace Controller\control;

use Controller\dao\CrudSql;
//use Controller\dao\UsuarioSql;

/**
* 
*/
class CrudController extends Controller
{

	public static function select($table, $bool = false)
	{
		$crud = new CrudSql();
		return $crud->select($table, $bool);
	}
	public static function insert($table)
	{
		$class = "Controller\dao\\".ucfirst($table->getTableName())."Sql";
		$crud = new $class();
		return $crud->insert($table);


		//return 

		/*return call_user_func_array(array("Controller\dao\\".ucfirst($table->getTableName()."Sql"), "insert"), array($table));;*/
	}
}
	
?>
<!-- 
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuario_insert`(pnome text, pemail text, pcpf varchar(11), ptelefone_fixo double,ptelefone_celular double, prua text, pcomplemento text, pnumero int, pbairro text, pcep int, pcidade text, pestado text)
BEGIN
	DECLARE ID INT DEFAULT 0;
    INSERT INTO endereco (rua, complemento, numero,bairro, cep, cidade,estado)
    VALUES (prua, pcomplemento, pnumero, pbairro, pcep, pcidade, pestado);
    SELECT idendereco INTO ID FROM endereco WHERE idendereco = LAST_INSERT_ID();
    INSERT INTO usuario (nome, email, cpf, telefone_fixo, telefone_celular, nivel, endereco_idendereco)
    values 				(pnome, pemail, pcpf, ptelefone_fixo,ptelefone_celular, 1, ID);
    
    SELECT idusuario,nome, email, cpf, telefone_fixo, telefone_celular, nivel, endereco_idendereco FROM usuario
    WHERE idusuario = LAST_INSERT_ID();

END
//////////CHAMANDO A PROCEDURE//////////////
call sp_usuario_insert('Vinicius', 'vinialves08@gmail.com', '04221293136', 62991267068,6233193086, 'AV N3', 'QD 30 LT 20', '0', 'ANÁPOLIS CITY', '75094080', 'ANÁPOLIS', 'GO');

-->