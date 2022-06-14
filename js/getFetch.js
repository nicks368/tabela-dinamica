function buscarDados(){
    fetch("./getPhp.php")
        .then (function(response){
            return response.json();
        })
        .then (function(response){
            response.forEach(element => {
                console.log(element.matricula);    
            });
        })
}

buscarDados();
