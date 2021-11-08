console.log("yo");

let contactForm = document.querySelector('#contact-form');
let contactButton = document.querySelector('#contact-button');

contactButton.addEventListener('click', ()=>{
    if(contactForm.classList.contains('d-none')){
        contactForm.classList.replace('d-none', 'd-block');
    } else {
        contactForm.classList.replace('d-block', 'd-none');
    }
})