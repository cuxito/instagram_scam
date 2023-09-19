let username = document.getElementById('1234');

username.addEventListener('focus')
username.addEventListener('keyup', (event)=>{
    console.log('hola');
    username.className += ' _aa49';
})