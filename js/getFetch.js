function buscarDados(){
    fetch("URL")
        .then (function(response){
            return response.json();
        })
        .then (function(response){
            response.forEach(element => {
                criarLinha(element.id, element.nome, element.preco);    
            });
        })
}

buscarDados();


