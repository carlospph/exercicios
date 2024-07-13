//mapeando elements

let inputSearch = document.querySelector("#inputSearch");
let btnSearch = document.querySelector("#btnSearch");

//adicionando function ao botão click

btnSearch.addEventListener("click", () => {
  if (inputSearch.value.trim() === "") {
    alert("Campo obrigatório");
  }
});
