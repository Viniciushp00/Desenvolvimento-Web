function verificaNome(){
    var jsNome;
    var cssborda;
    //Pegando o dado do html, utilizando o ID
    //document = pagina html
    //getElementById = Pegue elemento por ID
    //value = Informando que quero pegar o valor desse id
    jsNome = document.getElementById("nome").value;
    cssborda =  document.getElementById("nome");
    var div = document.getElementById("invalid_name");

    if(jsNome ==""){
        cssborda.style.border = "1px solid #f00";
        div.style.display = "block";
    }
    //Testando se o tamanho do nome e menor que 5
    else if(jsNome.length<5){
        cssborda.style.border = "1px solid #f00";
        div.style.display = "block";
    }
    //Se nome estiver correto, fazer ...
    else{
        cssborda.style.border = "1px solid #000";
        div.style.display = "none";
    }
}

function verificaEmail(jsEmail){
    var usuario = jsEmail.substring(0,jsEmail.indexOf("@"));
    var dominio = jsEmail.substring(jsEmail.indexOf("@")+1,jsEmail.length);
    var cssborda = document.getElementById("email");
    var div = document.getElementById("invalid_email");
    // .search - Procura se existe um valor dentro da string, se encontrar retorna o valor do indice, se não encontra volta -1
    //Se e-mail estiver correto, fazer ...
    if(usuario.length>0 && dominio.length>0 && (usuario.search("@")==-1) && (dominio.search("@")==-1) && (usuario.search(" ")==-1) && (dominio.search(" ")==-1)){
    
        cssborda.style.border = "1px solid #000";
        div.style.display = "none";

    } else{

        cssborda.style.border = "1px solid #f00";
        div.style.display = "block";

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


function validaCep() {
    const input = document.querySelector('#cep');
    input.addEventListener('keypress', () => {
        let inputLength = input.value.length;


        if (inputLength == 5) 
        {
            input.value += '-';
        }

    }) 
}
