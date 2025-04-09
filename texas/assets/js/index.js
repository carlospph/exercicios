const btnMenu = document.querySelector('#btn-menu');

const menu = document.querySelector('#menu-mobile');

btnMenu.addEventListener('click', () => {
  menu.classList.toggle('show');

  if (menu.classList.contains('show')) {
    btnMenu.setAttribute('class', 'fa-solid fa-bars');
  } else {
    btnMenu.setAttribute('class', 'fa-solid fa-xmark')
  }
})