require('./bootstrap');

var Turbolinks = require("turbolinks")
Turbolinks.start()

document.addEventListener('turbolinks:load', (event) => {
    document.body.classList.add('animate__animated');
    document.body.classList.add('animate__fadeIn');
    document.body.classList.add('animate__faster');    
})