
let input = document.getElementById('button-submit');

window.addEventListener('resize',()=>{

	let size = window.innerWidth;
 
	if(size < 400){ 
		input.innerHTML = '<i class="fa-solid fa-magnifying-glass"></i>';
	} 

	else{
		 input.innerHTML ='Pesquisar';
	}
})