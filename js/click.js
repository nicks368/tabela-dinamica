var classes = document.getElementsByClassName('aluno')
var numId = 0
//var btnId= document.getElementById(numId)



while (numId != classes.length ) {
    let btnId = document.getElementById(numId)

    btnId.addEventListener ('click', function(){
        
        let campoNome = document.getElementById('campoNome')



        campoNome.value = btnId.textContent
    })

    numId++;
    console.log(numId);
}





