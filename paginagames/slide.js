var radio = document.querySelector('.manual-btn')      //criar uma variavel que recebe a classe da navegaçã manual
var cont = 1

document.getElementById('radio1').checked = true       //radio 1 apareca quando o site for recarregado

setInterval(() => {
    proximaImg()
}, 2000)

function proximaImg(){
    cont++

    if(cont > 3){
        cont = 1 
    }

    document.getElementById('radio'+cont).checked = true
}