const popup = document.querySelector("#popup");
const body = document.querySelector('body');

function openPopup() {
    popup.style.display = 'block';
    if(popup. style.display=='block'){
        body.style.overflow='hidden';
    }
}

function closePopup(){
    popup.style.display = 'none';
    if(!popup.style.display=='none'){
        body.style.overflow='auto';
    }
}