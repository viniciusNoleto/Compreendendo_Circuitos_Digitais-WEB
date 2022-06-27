
document.querySelectorAll("[draggable='true']").forEach(item => {
    item.addEventListener('dragstart', event => {
        item.classList.add("dragging");
    });
    item.addEventListener('dragend', event => {
        item.classList.remove("dragging");
    });
});
  
document.querySelectorAll('.drop-target').forEach(item => {
    item.addEventListener('dragover', event => {
        event.preventDefault();
        
        item.classList.add('drop-target-ani');
    });

    
    item.addEventListener('dragleave', event => {
        event.preventDefault();

        item.classList.remove('drop-target-ani');
    });
    
    
    item.addEventListener('dragenter', event => {
        event.preventDefault();
    });
    
    item.addEventListener('drop', event => {
        event.preventDefault();
        item.classList.remove('drop-target-ani');

        item.appendChild(document.querySelector(".dragging"));
    });
});

