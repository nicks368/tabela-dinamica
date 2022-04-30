const tds = document.querySelectorAll("td.media");
var valorMedia = 0;
var valor = 1;

function bgColor(td) {
console.log(td)
    if (Number(td.textContent)>7){
            td.classList.toggle('aprovado');
            return(td)       
    }else {
        td.classList.toggle('reprovado');         
        return(td)
        
    }
    
}

Array.from(tds).forEach(element => {
    bgColor(element)
});


