let resultado = document.querySelector('#resultado')

function limpar(){
    resultado.innerHTML = '0'
}

function insert(num){

    if(resultado.innerHTML==='0' || resultado.innerHTML === '00'){
        resultado.innerHTML = num
    }

    else{
        resultado.innerHTML += num
    }
}

function aviso(){
    document.querySelector('.msg-erro').style.display = 'flex';
}

function calcular(){
    try{
        let total = eval(resultado.innerHTML);
        resultado.innerHTML = total
    }catch(Error){
       
       aviso()

        limpar()
    }
}

 

function closeAviso(){
    let close = document.querySelector('.msg-erro');
    close.style.display = 'none';
}

