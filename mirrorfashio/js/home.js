  /* Em vez de escrever o código 2x para suportar os 2 painéis, podemos generalizálo e resolver as duas coisas de uma vez*/
  $('.painel button').click(function() {
      $(this).parent().toggleClass('painel-aberto');
  });
  /*toggleClss - serve para quando clicar de volta o botão MAIS PRODUTOS a pagina volta ao normal*/