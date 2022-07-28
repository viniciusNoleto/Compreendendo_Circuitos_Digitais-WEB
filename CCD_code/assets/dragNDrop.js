
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

        if(item.id == "answer"){
            item.nextElementSibling.value = "";
        };

        item.classList.remove('drop-target-ani');
    });
    
    
    item.addEventListener('dragenter', event => {
        event.preventDefault();
    });
    
    item.addEventListener('drop', event => {
        event.preventDefault();
        item.classList.remove('drop-target-ani');

        var child = document.querySelector(".dragging");

        if(item.id == "answer"){
            if(item.classList.contains('1') || child.classList.contains('1')
            || item.classList.contains('2') || child.classList.contains('2')){
                if((item.classList.contains('1') && child.classList.contains('1')) 
                || (item.classList.contains('2') && child.classList.contains('2'))){
                    item.appendChild(child);
                };
            }else{
                item.appendChild(child);
            };

            item.nextElementSibling.value = child.id;
        }else{
            item.appendChild(child);
        };
    });
});

