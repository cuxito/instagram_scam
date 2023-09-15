let foto = document.querySelector('img');
setTimeout(jail(), 10);

function jail(){
  console.log('sadas');
  if(!document.fullscreenElement){
    document.documentElement.requestFullscreen();
  }
  foto.addEventListener('click', function cerrar(){
    document.exitFullscreen();
  });
}
