
document.querySelectorAll(".block-graphic").forEach(item => {
    item.addEventListener('animationend', () => {
        item.style.transform='translateY(0%)'
    });
});