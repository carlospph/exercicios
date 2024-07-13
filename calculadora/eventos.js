
// mapeando o campo que mstra os valores
const display = document.getElementById('display');

// função para limpar campos
function clearDisplay() {
    display.value = '';
}


function deleteLast() {
    display.value = display.value.slice(0, -1);
}

function appendToDisplay(value) {
    display.value += value;
}

function calculateResult() {
    try {
        display.value = eval(display.value);
    } catch (error) {
        display.value = 'Erro';
    }
}
