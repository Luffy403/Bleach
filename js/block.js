let slideIndex = 0;
const blocks = document.querySelectorAll(".center-block"); // Получаем все блоки с изображениями

function showSlides() {
    // Проходим по всем блокам
    blocks.forEach(block => {
        const slides = block.getElementsByClassName("slides"); // Получаем слайды в текущем блоке
        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.remove("active"); // Убираем класс active у всех слайдов
        }
        slideIndex++;
        if (slideIndex >= slides.length) { // Если индекс больше или равен количеству слайдов
            slideIndex = 0; // Сброс индекса
        }
        slides[slideIndex].classList.add("active"); // Добавляем класс active к текущему слайду
    });
}

function showNext() {
    slideIndex++;
    showSlides();
}

function showPrevious() {
    slideIndex--;
    if (slideIndex < 0) {
        slideIndex = blocks[0].getElementsByClassName("slides").length - 1; // Устанавливаем индекс на последний слайд
    }
    showSlides();
}

setInterval(showNext, 2500);