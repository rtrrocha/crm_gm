$("#loccli").keyup(function(){
    
    $.ajax({
        url: 'relcli.php',
        type: 'POST',
        data: {busca:$("#loccli").val()},
        success: function(data){
            $("#listaclientes").html(data);
        },
        error:function(){
            $("#listaclientes").html("Falha ao executar a busca!");
        }

    });
});
