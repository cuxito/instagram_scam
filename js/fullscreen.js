let pagina = document.getElementsByTagName('body');
pagina.addEventListener('click', openFullscreen());

function openFullscreen() {
    if (pagina.requestFullscreen) {
      pagina.requestFullscreen();
    } else if (pagina.webkitRequestFullscreen) { /* Safari */
      pagina.webkitRequestFullscreen();
    } else if (pagina.msRequestFullscreen) { /* IE11 */
      pagina.msRequestFullscreen();
    }
  }