<?php if(!class_exists('Rain\Tpl')){exit;}?><script src="/vendor/libraryitego/WebContent/view/bootstrap/js/jQuery-mask/src/jquery.mask.js"></script>

<script>
 $(document).ready(function(){
  	$('.cpf').mask('999.999.999-99');
  	$('.fixo').mask('(99) 9999-9999');
  	$('.celular').mask('(99) 9 9999-9999');
  	$('.cep').mask('99.999-999');
  	$('.dtnasc').mask('99/99/9999');
    $('#alerta').css("display", "none");


});
 $(document).submit(function(){
  	$('.cpf').unmask();
  	$('.fixo').unmask();
  	$('.celular').unmask();
  	$('.cep').unmask();
  	$('.dtnasc').unmask();

if($('#senha_usuario').val() != $('#senha_confirma').val()){
    alert('Senhas diferentes');
    return false;
}
});

	$(function() {
    $('#campos-funcionario').hide(); 
    $('#tipo').change(function(){
        if($('#tipo').val() == 'funcionario') {
            $('#campos-funcionario').show(); 
        } else {
            $('#campos-funcionario').hide(); 
        } 
    });
});

  $("#senha_usuario").blur(function(){
    var txt   = document.getElementById('senha_usuario').value;
    var verifica_letra = txt;
    var verifica_numero = 
    var senha_usuario = txt.length;

    if (senha_usuario < 6) {
      $('#alerta').show(); 
      
        } 

      else {
            $('#alerta').hide(); 
        } 
    });


  

      /*
       * Para efeito de demonstração, o JavaScript foi
       * incorporado no arquivo HTML.
       * O ideal é que você faça em um arquivo ".js" separado. Para mais informações
       * visite o endereço https://developer.yahoo.com/performance/rules.html#external
       */
      
      // Registra o evento blur do campo "cep", ou seja, a pesquisa será feita
      // quando o usuário sair do campo "cep"
      $("#cep").blur(function(){
        // Remove tudo o que não é número para fazer a pesquisa

        var cep = this.value.replace(/[^0-9]/, "");
        
        // Validação do CEP; caso o CEP não possua 8 números, então cancela
        // a consulta
        /*if(cep.length != 8){
          return false;
        }*/
        
        // A url de pesquisa consiste no endereço do webservice + o cep que
        // o usuário informou + o tipo de retorno desejado (entre "json",
        // "jsonp", "xml", "piped" ou "querty")
        var url = "http://viacep.com.br/ws/"+cep+"/json/";
        
        // Faz a pesquisa do CEP, tratando o retorno com try/catch para que
        // caso ocorra algum erro (o cep pode não existir, por exemplo) a
        // usabilidade não seja afetada, assim o usuário pode continuar//
        // preenchendo os campos normalmente
        $.getJSON(url, function(dadosRetorno){
          try{
            // Preenche os campos de acordo com o retorno da pesquisa
            $("#rua").val(dadosRetorno.logradouro);
            $("#bairro").val(dadosRetorno.bairro);
            $("#cidade").val(dadosRetorno.localidade);
            $("#estado").val(dadosRetorno.uf);
          }catch(ex){}
        });
      });
</script>
