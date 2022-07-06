
function draw(canva) {
    var c = document.getElementById(canva);
    var ctx = c.getContext("2d");

    // rect wire
    
    ctx.beginPath();
    ctx.strokeStyle = 'black';
    ctx.lineWidth = "2.5";
    ctx.strokeRect(22.5, 35, 150, 120);
    ctx.stroke();
    
    // bg mask for nrg
    
    ctx.beginPath();
    ctx.clearRect(20, 85, 15, 15);
    ctx.stroke();
    
    // line nrg b
    
    ctx.lineWidth = "1.5";
    ctx.moveTo(5, 85);
    ctx.lineTo(42, 85);
    ctx.stroke();
    
    // line nrg s
    
    ctx.lineWidth = "1.5";
    ctx.moveTo(12, 100);
    ctx.lineTo(35, 100);
    ctx.stroke();
    
    // bg mask for switch
    
    ctx.beginPath();
    ctx.clearRect(55, 30, 80, 10);
    ctx.stroke();
    
    // circ switch 1
    
    ctx.beginPath();
    ctx.fillStyle = "black";
    ctx.arc(55, 35, 5, 0, 2 * Math.PI);
    ctx.fill();
    ctx.stroke();
    
    // circ switch 2
    
    ctx.beginPath();
    ctx.fillStyle = "black";
    ctx.arc(135, 35, 5, 0, 2 * Math.PI);
    ctx.fill();
    ctx.stroke();
    
    // bg mask for nrg
    
    ctx.beginPath();
    ctx.clearRect(165, 85, 15, 15);
    ctx.stroke();
    
    // line bulb 1
    
    ctx.lineWidth = "2.5";
    ctx.moveTo(171, 85);
    ctx.lineTo(190, 85);
    ctx.stroke();
    
    // line bulb 2
    
    ctx.lineWidth = "2.5";
    ctx.moveTo(171, 100);
    ctx.lineTo(190, 100);
    ctx.stroke();
    
    // blub base
    
    ctx.beginPath();
    ctx.lineWidth = "1";
    ctx.arc(195, 92.5, 10, (Math.PI)/2, (3*Math.PI)/2);
    ctx.stroke();
    
    // line bulb 3
    
    ctx.lineWidth = "2";
    ctx.moveTo(195, 82);
    ctx.lineTo(205, 82);
    ctx.stroke();
    
    // line bulb 4
    
    ctx.lineWidth = "2";
    ctx.moveTo(195, 103);
    ctx.lineTo(205, 103);
    ctx.stroke();
    
    // line bulb 5
    
    ctx.lineWidth = "2.5";
    ctx.moveTo(200, 82);
    ctx.lineTo(200, 103);
    ctx.stroke();
    
    // line bulb 6
    
    ctx.lineWidth = "2.5";
    ctx.moveTo(195, 82);
    ctx.lineTo(195, 103);
    ctx.stroke();
    
    // blub
    
    ctx.beginPath();
    ctx.arc(222, 92.4, 20, -(5*Math.PI)/6, (5*Math.PI)/6);
    ctx.stroke();

};  

draw("wireCanvas");

function switchWireChange () {

    document.querySelectorAll('.switch-line').forEach((switchLine, i) => {
        switchLine.id == 'switch-line-open' ? switchLine.id = 'switch-line-close' : switchLine.id = 'switch-line-open'
    });

};

function bulbWireChange() {

    document.querySelectorAll('.bulb').forEach((bulb, i) => {
        bulb.id == 'wire-empty' ? bulb.id = 'bulb' : bulb.id = 'wire-empty'
    });

};

function lightWireChange(){

    document.querySelectorAll('.light').forEach((light, i) => {
        light.id == 'light1' ? light.id = 'light2' : light.id = 'light1'
    });

};

function wireChange() {

    document.querySelector('#wire-button').innerHTML == 'Fechar' ? 
        document.querySelector('#wire-button').innerHTML = 'Abrir' :
        document.querySelector('#wire-button').innerHTML = 'Fechar'
    
    switchWireChange();
    bulbWireChange();
    lightWireChange();
    
};