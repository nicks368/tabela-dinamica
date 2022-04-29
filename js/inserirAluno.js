// # para id's e . para class
var btn_inserir = document.querySelector('#inserir');

function inserirAluno(){
    var tabela = document.querySelector(".tabela")
    
    var tr_linha = document.createElement("tr");

    var form_nome = document.querySelector('#nome');
    var form_nota1 = document.querySelector('#nota1');
    var form_nota2 = document.querySelector('#nota2');
    var form_nota3 = document.querySelector('#nota3');
   
    // criar 5 td's
    var td_nome = document.createElement("td");
    var td_nota1 = document.createElement("td");
    var td_nota2 = document.createElement("td"); 
    var td_nota3 = document.createElement("td");
    var td_media = document.createElement("td");

    td_nome.classList.add('aluno')
    td_media.classList.add('media')
    td_nota1.classList.add('nota')
    td_nota2.classList.add('nota')
    td_nota3.classList.add('nota')

    td_nome.innerText = form_nome.value;
    td_nota1.innerText = form_nota1.value;
    td_nota2.innerText = form_nota2.value;
    td_nota3.innerText = form_nota3.value;
    
    tr_linha.appendChild(td_nome)
    tr_linha.appendChild(td_nota1)
    tr_linha.appendChild(td_nota2)
    tr_linha.appendChild(td_nota3)
    tr_linha.appendChild(td_media)

    const nova_tr = calcularMedia(tr_linha);

    tabela.appendChild(nova_tr)


}
btn_inserir.addEventListener("click", inserirAluno);

  //event.preventDefault();