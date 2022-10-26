function cadastrarHorario() {
    //Cria um array(objeto) com os valores informados na tela
    dados = {
        'nome': $('#nome').val(),
        'responsavel': $('#responsavel').val(),
        'Raça': $('#Raça').val(),
        'entrada': $('#entrada').val(),
        'saida': $('#saida').val(),
        'cadastrar': $('#cadastrar').val()
    }
    
    // Mostra o Loading

    carregarModalLoading();

    // Envia e recebe os dados do Back-end (PHP)
    $.ajax({
        url:'../Controller/contatoController.php',
        type: 'POST',
        data: dados,
        success: function(data) {
            setTimeout(function() {
                esconderModalLoading();
                $('#status').text(data.mensagem) //Mostra a mensagem vinda do Back-End 
                
                //  Verificar o código retornado
                if(data.codigo == 1) {
                    $('#status').css({
                        "color": "#f1c40f"
                    })

                    //redireciona para o index, depois do Delay 
                    setTimeout(function() {
                        window.location.href = "home.php"
                    }, 2000); //tempo em milisegundos


                }else{
                    $(data.campo).focus()
                    $('#status').css({
                        "color": "#ff6f65"
                    })

                }

            }, 1000); //tempo em milisegundos
        }
    }); 
}
function carregarModalLoading() {
    $('#modalLoading').css({
        "display": "block"
    });
}

  // retirar o Loading
function esconderModalLoading() {
    $('#modalLoading').css({
        "display": "none"
    });

}