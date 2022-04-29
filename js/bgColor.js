td = document.getElementsByClassName("media");
valorMedia = 0;
valor = 1;
teste = document.querySelector('h1');

function bgColor(td) {
    if (td.textContent>6){
            td.style.backgroundColor = 'green';
            return(td)       
    }else {
        td.style.backgroundColor = 'red';           
        return(td)
        
    }
    
}

while (valor != td.length) {
    bgColor(td[valor]);
    valor++
} 
 


