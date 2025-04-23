//acessando o local storage


const btnCadastrar = document.querySelector('#btnCadastrar');

btnCadastrar.addEventListener('click',()=>{
    const valorDoCampo = document.querySelector('.valorDoCampo').value;

    if(valorDoCampo.trim()===""){
        alert("Campo obrigatório para preenchimento")
    }
    else{

    localStorage.setItem('nome',valorDoCampo);

    const exibir = document.querySelector('.exibirNome').textContent = "Cadastrado: "+valorDoCampo;

    }

})


const overlay = document.querySelector('#overlay');
overlay.style.display = 'none';

 



// requisição 
function buscarTarefas(){
    fetch("http://localhost:3000/tarefas")
    .then(res=> res.json())
    .then(res=>{

    })
}


function inserirTarefas(listaDeTarefas){
    
}