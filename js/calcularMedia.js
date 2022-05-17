var tr = document.querySelectorAll("tr");

/*alert (tr[0].children[0].textContent);*/
//console.log(tr);
var linha = 1;
var coluna = 1;
var soma = 0;
var media = 0;



function calcularMedia(tr) {
   
    while (coluna<4){
        soma = Number(tr.children[coluna].textContent);
        media += soma
        //console.log(media);
        coluna++;           
    }
    media = media/3;  
    //console.log(media);
    tr.children[coluna].textContent = media.toFixed(2);    

    coluna = 1;
    media = 0;

    return(tr);
}

while (linha != document.querySelectorAll('tr').length) {
    calcularMedia(tr[linha]);
    linha++; 
}


/*while (linha<7){
    
    while (coluna<4){
            alert (tr[linha].children[coluna].textContent);

            coluna++;
            
        }
    coluna = 1;
    linha++; 
} Apresenta os dados da tabela */
    
