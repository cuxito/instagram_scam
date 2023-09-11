<<<<<<< HEAD
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
=======
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
>>>>>>> 1da559525e8872885c0f2451e77fd6e4702ef352
  }