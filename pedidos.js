function abrirModal(){
    let modal = document.querySelector(".modal")
    let bg = document.querySelector(".bg")

    modal.style.display = 'block';
    bg.style.display = 'block';
}

function fechar(){
    let modal = document.querySelector(".modal")
    let bg = document.querySelector(".bg")

    modal.style.display = 'none';
    bg.style.display = 'none';
}

function enviarCozinha(){
    fechar()

    let modal2 = document.querySelector(".modal2")
    let bg2 = document.querySelector(".bg2")
    
    modal2.style.display = 'block';
    bg2.style.display = 'block';

    

}

function fechar2(){
    let modal2 = document.querySelector(".modal2")
    let bg2 = document.querySelector(".bg2")

    modal2.style.display = 'none';
    bg2.style.display = 'none';

}