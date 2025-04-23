function criarTarefa(){
   overlay.classList.add('active')
   modalNovaTarefa.classList.add('active')
}

function fecharModal(){
    overlay.classList.remove('active');
    modalNovaTarefa.classList.remove('active');
}