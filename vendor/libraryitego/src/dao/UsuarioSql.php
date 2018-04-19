<?php 
namespace Controller\dao;

use Controller\dao\Sql;

/**
* 
*/
class UsuarioSql extends Sql
{

	public function insert($table)
		{
			//var_dump($table);
			$var = ":".strtoupper(str_replace(",", ",:", $table->getTableColumnsNamesOutKey()));
			$q = "CALL sp_usuario_insert(:NOME,:EMAIL,:CPF,:CELULAR,:FIXO,:RUA, :COMPLEMENTO, :NUMERO, :BAIRRO, :CEP, :CIDADE, :ESTADO);";
			//call sp_usuario_insert('Vinicius', 'vinialves08@gmail.com', '04221293136', 62991267068,6233193086, 'AV N3', 'QD 30 LT 20', '0', 'ANÁPOLIS CITY', '75094080', 'ANÁPOLIS', 'GO');
			$values = array(
				':NOME' => $table->getNome(),
				':EMAIL' => $table->getEmail(),
				':CPF' => $table->getCpf(),
				':CELULAR' => $table->getCelular(),
				':FIXO'=> $table->getFixo(),
				':RUA' => $table->getEndereco()->getRua(),
				':COMPLEMENTO' => $table->getEndereco()->getComplemento(),
				':NUMERO' => $table->getEndereco()->getNumero(),
				':BAIRRO' => $table->getEndereco()->getBairro(),
				':CEP'=> $table->getEndereco()->getCep(),
				':CIDADE' => $table->getEndereco()->getCidade(),
				':ESTADO' => $table->getEndereco()->getEstado()
			);
			
			return $this->select($q, $values);
		}	
}
 
 ?>