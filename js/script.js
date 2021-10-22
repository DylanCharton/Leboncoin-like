console.log("coucou");

let categories = document.querySelector('#category');
let selectMultimedia = document.querySelector("#multimedia-select")

categories.addEventListener('click', ()=>{
    let immobilier = document.querySelector("#immobilier");
    let voitures = document.querySelector("#voiture");
    let multimedia = document.querySelector("#multimedia");

    if(categories.value == "Vente Immobilière"){
        let selectTypeBien = document.createElement("select");
        let optionTypeBien1 = document.createElement("option");
        let optionTypeBien2 = document.createElement("option");

        let surfaceImmo = document.createElement("input");
        surfaceImmo.setAttribute("type", "number");
        surfaceImmo.setAttribute("name", "surface");
        let surfaceImmoLabel = document.createElement("label")

        let roomsImmo = document.createElement("input");
        roomsImmo.setAttribute("type", "number");
        roomsImmo.setAttribute("name", "rooms");
    } else {
        immobilier.classList.replace("d-block", "d-none");
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