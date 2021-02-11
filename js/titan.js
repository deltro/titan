let formMsg = document.getElementById('form-msg');
let btnMsg = document.getElementById('btn-contactar');
let btnFechar = document.getElementById('btn-fechar');

/* click no btn */
btnMsg.onclick = function(){
  formMsg.classList.toggle('d-none');
}
btnFechar.onclick = function(){
  formMsg.classList.toggle('d-none');	
}



