// Saying Hi is simply being polite
console.log("coucou");

// Declaring the fields that are going to trigger my functions
let immobilierOption = document.querySelector('#immobilier');
let selectMultimedia = document.querySelector("#multimedia-select")

// Category generation script
immobilierOption.addEventListener('click', ()=>{
    // The Divs with each part of the form
    
    let voitures = document.querySelector("#voiture");
    let multimedia = document.querySelector("#multimedia");
    let createForm = document.querySelector("#create-ad-form");
// If the user chose Vente Immobilière
    if(categories.value == "Vente Immobilière"){
        // I create the select for the type 
        let selectTypeBien = document.createElement("select");
        let optionTypeBien1 = document.createElement("option");
        let optionTypeBien2 = document.createElement("option");
        let immobilier = document.createElement("div");

        // I create the surface input and bind parameters
        let surfaceImmo = document.createElement("input");
        surfaceImmo.setAttribute("type", "number");
        surfaceImmo.setAttribute("name", "surface");
        // The label for surface
        let surfaceImmoLabel = document.createElement("label");
        surfaceImmoLabel.setAttribute("for", "surface");
        surfaceImmoLabel.innerHTML = "Surface";
        // Input for the numbers of rooms
        let roomsImmo = document.createElement("input");
        roomsImmo.setAttribute("type", "number");
        roomsImmo.setAttribute("name", "rooms");
        createForm.appendChild(immobilier);
        immobilier.appendChild(surfaceImmo);
        immobilier.appendChild(surfaceImmoLabel);

        console.log("coucou");
    } else {
        
    }
    if(categories.value == "Voitures"){
        voitures.classList.replace("d-none", "d-block");
    } else {
        voitures.classList.replace("d-block", "d-none");
    }

    if(categories.value == "Multimedia"){
        multimedia.classList.replace("d-none", "d-block");
    } else {
        multimedia.classList.replace("d-block", "d-none");
    }

    
});

selectMultimedia.addEventListener('click', ()=>{
    let informatique = document.querySelector("#informatique");
    let gaming = document.addEventListener("#gaming");
    let telephonie = document.addEventListener("#telephonie");

    if(selectMultimedia.value == "Informatique"){

    } else {

    }
    if(selectMultimedia.value == "console-jv"){

    } else {

    }
    if(selectMultimedia.value == "telephonie"){

    } else {

    }

});