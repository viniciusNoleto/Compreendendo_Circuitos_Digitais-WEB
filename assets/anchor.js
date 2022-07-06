document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const to = document.querySelector(e.target.getAttribute('href')).offsetTop;
        window.scroll({
            top: to - 62,
            behavior: "smooth",
        });
    });
});