let toggleForm = document.getElementById('toggle-form');

toggleForm.addEventListener('click', ()=>{

    let formulaire = document.getElementById('formulaire');
  
    // Condition pour afficher/cacher le formulaire en fonction de son état
    if(formulaire.classList.contains('d-none')){
        formulaire.classList.replace('d-none','d-block')
    }else{
        formulaire.classList.replace('d-block','d-none')
    }

})


console.log("coucou");