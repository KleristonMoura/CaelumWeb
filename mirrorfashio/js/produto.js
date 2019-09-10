var inputTamanho = document.querySelector('[name=tamanho]')
var outputTamanho = document.querySelector('[name=valortamanho]')

function mostraTamanho() {
    outputTamanho.value = inputTamanho.value
}
inputTamanho.oninput = mostraTamanho
    /*confome informado no produto.html, o tamanho da roupa vai mudar de 2 em 2 */
var empresa = "Caelum";
// substitui a parte "lum" por "tano"
empresa.replace("lum", "tano");
console.log(empresa); // imprime Caelum, não mudou!
empresa = empresa.replace("lum", "tano");
console.log(empresa); // imprime Caetano, mudou!