const images = document.querySelectorAll('.slider .slider-line img');
const sliderLine = document.querySelector('.slider-line');
let count = 0;
let width;

function init() {
    console.log("resize");
    width = document.querySelector('.slider').offsetWidth;

    sliderLine.style.width = width * images.length + 'px';

    images.forEach(item => {
        item.style.width = width + 'px';
        item.style.height = 'auto';
    });
    rollSlider();

    console.log(width);
}

init();
window.addEventListener('resize', init);

document.querySelector('.slider-prev').addEventListener('click', function () {
    count--;
    if (count < 0) count = images.length - 1;
    rollSlider();
});

document.querySelector('.slider-next').addEventListener('click', function () {
    count++;
    if (count > images.length - 1) count = 0;
    rollSlider();
});

function rollSlider() {
    sliderLine.style.transform = 'translate(-' + count * width + 'px)';
}