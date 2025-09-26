let button = document.getElementById('dropBut');
let dropdown = document.getElementById('dropUl');

function dropClick(){
    dropdown.classList.toggle('show');
}

button.addEventListener('click', dropClick);