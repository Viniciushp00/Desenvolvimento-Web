function verificaNome(){
    var jsNome;
    var cssborda;
    //Pegando o dado do html, utilizando o ID
    //document = pagina html
    //getElementById = Pegue elemento por ID
    //value = Informando que quero pegar o valor desse id
    jsNome = document.getElementById("nome").value;
    cssborda =  document.getElementById("nome");

    if(jsNome ==""){
        alert ("Favor inserir valor");
        cssborda.style.border = "1px solid #f00";
    }
    //Testando se o tamanho do nome e menor que 5
    else if(jsNome.length<5){
        alert ("Nome invalido, favor preecher corretamente");
        cssborda.style.border = "1px solid #f00";
    }
    //Se nome estiver correto, fazer ...
    else{
        cssborda.style.border = "1px solid #000";
    }
}

function verificaEmail(jsEmail){
    var usuario = jsEmail.substring(0,jsEmail.indexOf("@"));
    var dominio = jsEmail.substring(jsEmail.indexOf("@")+1,jsEmail.length);
    var cssborda = document.getElementById("email");
    // .search - Procura se existe um valor dentro da string, se encontrar retorna o valor do indice, se não encontra volta -1
    //Se e-mail estiver correto, fazer ...
    if(usuario.length>0 && dominio.length>0 && (usuario.search("@")==-1) && (dominio.search("@")==-1) && (usuario.search(" ")==-1) && (dominio.search(" ")==-1)){
    
        cssborda.style.border = "1px solid #000";

    } else{

        alert ("Email invalido");
        cssborda.style.border = "1px solid #f00";;

    }
}

function validaCpf() {
    const input = document.querySelector('#cpf');
    input.addEventListener('keypress', () => {
        let inputLength = input.value.length;
        // MAX LENGHT 14  CPF
        // 011.721.799-02
        // 123 567 8910   posições


        if (inputLength == 3 || inputLength == 7) 
        {
            input.value += '.';
        }
        else if (inputLength == 11)
        {
            input.value += '-';
        }
    }) 
}
