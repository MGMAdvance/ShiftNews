// PESQUISA
$(function(){

  $('#search').keyup(function(){
    var pesquisa = $(this).val();

    $(".resultados").html(pesquisa);

    if(pesquisa != "" ){
      var dados = {
        palavra : pesquisa
      };
      $.post('partes/pesquisa-modal.php', dados, function(retorna){
        $(".resultados").html(retorna);
      });
    }
  });

  $("#pesquisar").submit(function(e) {
    e.preventDefault();
    var pesquisa = $("#search").val();

    if(pesquisa == ''){
      swal ( "Oops" ,  "Por favor, informe algo!" ,  "error" );
    }else{
      var dados = {
        palavra : pesquisa
      }
      $.post('partes/pesquisa-modal.php', dados, function(retorna){
        $(".resultados").html(retorna);
      });
    }
  });

});