const btn = document.getElementById('send');

btn.addEventListener('click', ()=>{
  btn.textContent = '送信しました' ;
  btn.setAttribute('disabled' , true);
});

