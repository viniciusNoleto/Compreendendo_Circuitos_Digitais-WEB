function adjustTimer(v) {
    if (v=0) {
        return 0;
    } else {
        return v;
    }
};

function typeWrite(tw) {
    var time = [];
    tw.forEach((twa,j) => {
        time.push(twa.innerHTML.split('').length);

        const twaArrey = twa.innerHTML.split('');
        twa.innerHTML = '';

        setTimeout(()=>{
            twaArrey.forEach((l,i) => {
                setTimeout(() => twa.innerHTML += l, 35 * i);
            });
        }, time[adjustTimer(j)]*35*j);
    });
};

typeWrite(document.querySelectorAll('.typeWrite'));