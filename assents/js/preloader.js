let elem_preLoader = document.getElementById("preloader");
let elem_loader = document.getElementById("loader");
console.log(" Ok");

setTimeout(function(){
    elem_preLoader.classList.remove("preloader");
    elem_loader.classList.remove("loader");
}, 1200);