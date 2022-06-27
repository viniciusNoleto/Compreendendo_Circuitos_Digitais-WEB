function typeWrite(e) {
    const eArrey = e.innerHTML.split('');
    e.innerHTML = '';

    eArrey.forEach((l,i) => {
        setTimeout(() => e.innerHTML += l, 35 * i);
    });
};

typeWrite(document.querySelector('.typeWrite'));