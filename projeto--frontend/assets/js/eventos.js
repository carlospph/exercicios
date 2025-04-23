const iconeMenu = document.querySelector('.icone-menu');
const menu = document.querySelector('.menu');

iconeMenu.addEventListener('click',()=>{
    menu.classList.toggle('show');

    if(menu.classList.contains('show')){
        iconeMenu.setAttribute('class','fa-solid fa-xmark icone-menu');
    }else{
        iconeMenu.setAttribute('class','fa-solid fa-bars icone-menu')
    }
})