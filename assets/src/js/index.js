// alert("Hello, world!");

let dropdown = document.querySelector('.fas.fa-bars');

dropdown.addEventListener('click', () => {
   document.querySelector('nav ul').classList.toggle('hidden') 
   document.querySelector('nav ul').classList.toggle('left-[calc(100%+120px)]') 
   document.querySelector('nav ul').classList.toggle('left-[calc(100%-200px)]') 
})    