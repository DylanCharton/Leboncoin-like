// Saying Hi is simply being polite
console.log("coucou");

// Declaring the fields that are going to trigger my functions
let categories = document.querySelector('#category');
let selectMultimedia = document.querySelector("#multimedia-select")

// Category generation script
categories.addEventListener('change', ()=>{
    // The Divs with each part of the form
    let createForm = document.querySelector("#create-ad-form");
// If the user chose Vente Immobilière
    if(categories.value == "Vente Immobilière"){
        createForm.removeChild(createForm.lastChild);
        // I create the select for the type 
        let selectTypeBien = document.createElement("select");
        selectTypeBien.setAttribute("name", "category-choice")
        let optionTypeBien1 = document.createElement("option");
        let optionTypeBien2 = document.createElement("option");
        optionTypeBien1.innerHTML = "Appartement";
        optionTypeBien2.innerHTML = "Maison";
        // I append the options to the select
        selectTypeBien.appendChild(optionTypeBien1);
        selectTypeBien.appendChild(optionTypeBien2);
        let selectTypeBienLabel = document.createElement("label")
        selectTypeBienLabel.setAttribute("for", "category-choice")
        selectTypeBienLabel.innerHTML = "Type de bien"
        // I create the div for the immobilier inputs.
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
        let roomsImmoLabel = document.createElement("label")
        roomsImmoLabel.setAttribute("for", "rooms");
        roomsImmoLabel.innerHTML = "Nombre de pièces"

        let submitImmo = document.createElement("input");
        submitImmo.setAttribute("name", "submitImmo");
        submitImmo.setAttribute("type", "submit");

        // Appending the div into the form and then the inputs in the div
        createForm.appendChild(immobilier);
        immobilier.appendChild(selectTypeBienLabel);
        immobilier.appendChild(selectTypeBien);
        immobilier.appendChild(surfaceImmoLabel);
        immobilier.appendChild(surfaceImmo);
        immobilier.appendChild(roomsImmoLabel);
        immobilier.appendChild(roomsImmo);
        immobilier.appendChild(submitImmo);
        immobilier.className = "d-flex flex-column immo-div";
        

        
    } else if(categories.value == "Voitures"){
        createForm.removeChild(createForm.lastChild);

        let brandCar = document.createElement("input");
        brandCar.setAttribute("name", "brand-car")
        brandCar.setAttribute("type", "text")
        let brandCarLabel = document.createElement("label");
        brandCarLabel.setAttribute("for", "brand-car");
        brandCarLabel.innerHTML = "Marque";

        let modelCar = document.createElement("input");
        modelCar.setAttribute("name", "model-car");
        modelCar.setAttribute("type", "text");
        let modelCarLabel = document.createElement("label");
        modelCarLabel.setAttribute("for", "model-car");
        modelCarLabel.innerHTML = "Modèle";

        let kilometersCar = document.createElement("input");
        kilometersCar.setAttribute("name", "kilometers-car");
        kilometersCar.setAttribute("type", "number");
        let kilometersCarLabel = document.createElement("label");
        kilometersCarLabel.setAttribute("for", "kilometers-car");
        kilometersCarLabel.innerHTML = "Kilométrage";

        let carburantChoice = document.createElement("select");
        carburantChoice.setAttribute("name", "carburant-choice");
        let carburantChoiceLabel = document.createElement("label");
        carburantChoiceLabel.setAttribute("for", "carburant-choice");
        carburantChoiceLabel.innerHTML = "Carburant"
        let carburantOption1 = document.createElement("option");
        carburantOption1.setAttribute("value", "Diesel");
        carburantOption1.innerHTML = "Diesel";
        let carburantOption2 = document.createElement("option");
        carburantOption2.setAttribute("value", "Essence");
        carburantOption2.innerHTML = "Essence"
        let carburantOption3 = document.createElement("option");
        carburantOption3.setAttribute("value", "Électrique");
        carburantOption3.innerHTML = "Électrique";
        carburantChoice.appendChild(carburantOption1);
        carburantChoice.appendChild(carburantOption2);
        carburantChoice.appendChild(carburantOption3);

        let gearboxChoice = document.createElement("select")
        gearboxChoice.setAttribute("name", "gearbox-choice");
        let gearboxChoiceLabel = document.createElement("label");
        gearboxChoiceLabel.setAttribute("for", "gearbox-choice");
        gearboxChoiceLabel.innerHTML = "Boîte de vitesse"
        gearboxOption1 = document.createElement("option");
        gearboxOption1.setAttribute("value", "Automatique");
        gearboxOption1.innerHTML = "Automatique";
        gearboxOption2 = document.createElement("option");
        gearboxOption2.setAttribute("value", "Manuelle");
        gearboxOption2.innerHTML = "Manuelle";
        gearboxChoice.appendChild(gearboxOption1);
        gearboxChoice.appendChild(gearboxOption2);

        let colorCar = document.createElement("input");
        colorCar.setAttribute("name", "color-car");
        colorCar.setAttribute("type", "text");
        let colorCarLabel = document.createElement("label");
        colorCarLabel.setAttribute("for", "color-car");
        colorCarLabel.innerHTML = "Couleur";

        let portesCar = document.createElement("input");
        portesCar.setAttribute("name", "portes-car");
        portesCar.setAttribute("type", "number");
        let portesCarLabel = document.createElement("label");
        portesCarLabel.setAttribute("for", "portes-car");
        portesCarLabel.innerHTML = "Nombre de portes"

        let puissanceCar = document.createElement("input");
        puissanceCar.setAttribute("name", "puissance-car");
        puissanceCar.setAttribute("type", "number");
        let puissanceCarLabel = document.createElement("label");
        puissanceCarLabel.setAttribute("for", "puissance-car");
        puissanceCarLabel.innerHTML = "Puissance DIN"

        let seatsCar = document.createElement("input");
        seatsCar.setAttribute("name", "seats-car");
        seatsCar.setAttribute("type", "number");
        let seatsCarLabel = document.createElement("label");
        seatsCarLabel.setAttribute("for", "seats-car");
        seatsCarLabel.innerHTML = "Nombre de sièges";

        let submitCar = document.createElement("input");
        submitCar.setAttribute("name", "submitCar");
        submitCar.setAttribute("type", "submit");

        let voitures = document.createElement("div");
        createForm.appendChild(voitures);
        voitures.appendChild(brandCarLabel);
        voitures.appendChild(brandCar);
        voitures.appendChild(modelCarLabel);
        voitures.appendChild(modelCar);
        voitures.appendChild(kilometersCarLabel);
        voitures.appendChild(kilometersCar);
        voitures.appendChild(carburantChoiceLabel);
        voitures.appendChild(carburantChoice);
        voitures.appendChild(gearboxChoiceLabel);
        voitures.appendChild(gearboxChoice);
        voitures.appendChild(colorCarLabel);
        voitures.appendChild(colorCar);
        voitures.appendChild(portesCarLabel);
        voitures.appendChild(portesCar);
        voitures.appendChild(puissanceCarLabel);
        voitures.appendChild(puissanceCar);
        voitures.appendChild(seatsCarLabel);
        voitures.appendChild(seatsCar);
        voitures.appendChild(submitCar);
        voitures.className = "d-flex flex-column voiture-div";

    } else if(categories.value == "Multimedia"){
        createForm.removeChild(createForm.lastChild);
        let multimediaDiv = document.createElement("div");
        createForm.appendChild(multimediaDiv);

        let selectMultimedia = document.createElement("select");
        selectMultimedia.setAttribute("name", "select-multimedia");
        let selectMultimediaLabel = document.createElement("label");
        selectMultimediaLabel.setAttribute("for", "select-multimedia");
        selectMultimediaLabel.innerHTML = "Sélectionnez une sous-catégorie";
        let multimediaOption1 = document.createElement("option");
        multimediaOption1.setAttribute("value", "");
        multimediaOption1.innerHTML = "";
        let multimediaOption2 = document.createElement("option");
        multimediaOption2.setAttribute("value", "Informatique");
        multimediaOption2.innerHTML = "Informatique";
        let multimediaOption3 = document.createElement("option");
        multimediaOption3.setAttribute("value", "Console");
        multimediaOption3.innerHTML = "Console - Jeux vidéo";
        let multimediaOption4 = document.createElement("option");
        multimediaOption4.setAttribute("value", "Téléphonie");
        multimediaOption4.innerHTML = "Téléphonie";

        selectMultimedia.appendChild(multimediaOption1);
        selectMultimedia.appendChild(multimediaOption2);
        selectMultimedia.appendChild(multimediaOption3);
        selectMultimedia.appendChild(multimediaOption4);
        multimediaDiv.appendChild(selectMultimediaLabel);
        multimediaDiv.appendChild(selectMultimedia);

        let subCatDiv = document.createElement("div");
        subCatDiv.setAttribute("id", "sub-cat")
        multimediaDiv.appendChild(subCatDiv);
        

        selectMultimedia.addEventListener("change", ()=>{
            let subCatDiv = document.querySelector("#sub-cat");
            
            if(selectMultimedia.value == "Informatique"){
                if(subCatDiv.hasChildNodes()){
                    subCatDiv.removeChild(subCatDiv.lastChild);
                    }
                let informatiqueDiv = document.createElement("div");
                subCatDiv.appendChild(informatiqueDiv);

                let etat = document.createElement("select");
                let etatLabel = document.createElement("label");
                etatLabel.setAttribute("for", "etat-select");
                etatLabel.innerHTML = "État du produit";
                etat.setAttribute("name", "etat-select");
                etatOption1 = document.createElement("option");
                etatOption1.setAttribute("value", "Neuf");
                etatOption1.innerHTML = "Neuf";
                etatOption2 = document.createElement("option");
                etatOption2.setAttribute("value", "Très bon");
                etatOption2.innerHTML = "Très bon";
                etatOption3 = document.createElement("option");
                etatOption3.setAttribute("value", "Bon");
                etatOption3.innerHTML = "Bon";
                etatOption4 = document.createElement("option");
                etatOption4.setAttribute("value", "Satisfaisant");
                etatOption4.innerHTML = "Satisfaisant"
                etatOption5 = document.createElement("option");
                etatOption5.setAttribute("value", "Pour pièces");
                etatOption5.innerHTML = "Pour pièces";
                etat.appendChild(etatOption1);
                etat.appendChild(etatOption2);
                etat.appendChild(etatOption3);
                etat.appendChild(etatOption4);
                etat.appendChild(etatOption5);

                let submitInfo = document.createElement("input");
                submitInfo.setAttribute("name", "submitInfo");
                submitInfo.setAttribute("type", "submit");

                informatiqueDiv.appendChild(etatLabel);
                informatiqueDiv.appendChild(etat);
                informatiqueDiv.appendChild(submitInfo);
                informatiqueDiv.classList = "d-flex flex-column";

            } else if(selectMultimedia.value == "Console"){
                    if(subCatDiv.hasChildNodes()){
                    subCatDiv.removeChild(subCatDiv.lastChild);
                    }
                let gamingDiv = document.createElement("div");
                // Select the type of gaming
                let typeGaming = document.createElement("select");
                typeGaming.setAttribute("name", "type-gaming");
                let typeGamingLabel = document.createElement("label");
                typeGamingLabel.setAttribute("for", "type-gaming");
                let typeGamingOption1 = document.createElement("option");
                typeGamingOption1.setAttribute("value", "Console");
                typeGamingOption1.innerHTML = "Console";
                let typeGamingOption2 = document.createElement("option");
                typeGamingOption2.setAttribute("value", "Jeux")
                typeGamingOption2.innerHTML = "Jeux";
                let typeGamingOption3 = document.createElement("option");
                typeGamingOption3.setAttribute("value", "Accessoires");
                typeGamingOption3.innerHTML = "Accessoires";
                typeGaming.appendChild(typeGamingOption1);
                typeGaming.appendChild(typeGamingOption2);
                typeGaming.appendChild(typeGamingOption3);
                // Brand of gaming
                let brandGaming = document.createElement("input");
                brandGaming.setAttribute("name", "brand-gaming");
                brandGamingLabel = document.createElement("label");
                brandGamingLabel.setAttribute("for", "brand-gaming");
                brandGamingLabel.innerHTML = "Marque";
                // Model of gaming
                let modelGaming = document.createElement("input");
                modelGaming.setAttribute("name", "model-gaming");
                let modelGamingLabel = document.createElement("label");
                modelGamingLabel.setAttribute("for", "model-gaming");
                modelGamingLabel.innerHTML = "Modèle";
                // State of product
                let etat = document.createElement("select");
                etat.setAttribute("name", "etat-select");
                let etatLabel = document.createElement("label");
                etatLabel.setAttribute("for", "etat-select");
                etatLabel.innerHTML = "État du produit";
                etatOption1 = document.createElement("option");
                etatOption1.setAttribute("value", "Neuf");
                etatOption1.innerHTML = "Neuf";
                etatOption2 = document.createElement("option");
                etatOption2.setAttribute("value", "Très bon");
                etatOption2.innerHTML = "Très bon";
                etatOption3 = document.createElement("option");
                etatOption3.setAttribute("value", "Bon");
                etatOption3.innerHTML = "Bon";
                etatOption4 = document.createElement("option");
                etatOption4.setAttribute("value", "Satisfaisant");
                etatOption4.innerHTML = "Satisfaisant"
                etatOption5 = document.createElement("option");
                etatOption5.setAttribute("value", "Pour pièces");
                etatOption5.innerHTML = "Pour pièces";
                etat.appendChild(etatOption1);
                etat.appendChild(etatOption2);
                etat.appendChild(etatOption3);
                etat.appendChild(etatOption4);
                etat.appendChild(etatOption5);

                let submitGaming = document.createElement("input");
                submitGaming.setAttribute("name", "submitGaming");
                submitGaming.setAttribute("type", "submit");
                // Append all elements to subCatDiv
                subCatDiv.appendChild(gamingDiv);
                gamingDiv.appendChild(typeGamingLabel);
                gamingDiv.appendChild(typeGaming);
                gamingDiv.appendChild(brandGamingLabel);
                gamingDiv.appendChild(brandGaming);
                gamingDiv.appendChild(modelGamingLabel);
                gamingDiv.appendChild(modelGaming);
                gamingDiv.appendChild(etatLabel);
                gamingDiv.appendChild(etat);
                gamingDiv.appendChild(submitGaming);
                gamingDiv.classList = "d-flex flex-column";

            } else if(selectMultimedia.value == "Téléphonie"){
                if(subCatDiv.hasChildNodes()){
                    subCatDiv.removeChild(subCatDiv.lastChild);
                    }
                
                let telephonieDiv = document.createElement("div");
                subCatDiv.appendChild(telephonieDiv);

                let brandTelephonie = document.createElement("input")
                brandTelephonie.setAttribute("name", "brand-telephonie")
                brandTelephonie.setAttribute("type", "text")
                let brandTelephonieLabel = document.createElement("label")
                brandTelephonieLabel.setAttribute("for", "brand-telephonie");
                brandTelephonieLabel.innerHTML = "Marque"

                let modelTelephonie = document.createElement("input")
                modelTelephonie.setAttribute("name", "model-telephonie");
                modelTelephonie.setAttribute("type", "text")
                let modelTelephonieLabel = document.createElement("label")
                modelTelephonieLabel.setAttribute("for", "model-telephonie");
                modelTelephonieLabel.innerHTML = "Modèle";

                let colorTelephonie = document.createElement("input")
                colorTelephonie.setAttribute("name", "color-telephonie");
                colorTelephonie.setAttribute("type", "text")
                let colorTelephonieLabel = document.createElement("label")
                colorTelephonieLabel.setAttribute("for", "color-telephonie");
                colorTelephonieLabel.innerHTML = "Couleur";

                let storageTelephonie = document.createElement("input")
                storageTelephonie.setAttribute("name", "storage-telephonie");
                storageTelephonie.setAttribute("type", "number");
                let storageTelephonieLabel = document.createElement("label");
                storageTelephonieLabel.setAttribute("for", "storage-telephonie");
                storageTelephonieLabel.innerHTML = "Capacité de stockage";

                let etat = document.createElement("select");
                etat.setAttribute("name", "etat-select");
                let etatLabel = document.createElement("label");
                etatLabel.setAttribute("for", "etat-select");
                etatLabel.innerHTML = "État du produit";
                etatOption1 = document.createElement("option");
                etatOption1.setAttribute("value", "Neuf");
                etatOption1.innerHTML = "Neuf";
                etatOption2 = document.createElement("option");
                etatOption2.setAttribute("value", "Très bon");
                etatOption2.innerHTML = "Très bon";
                etatOption3 = document.createElement("option");
                etatOption3.setAttribute("value", "Bon");
                etatOption3.innerHTML = "Bon";
                etatOption4 = document.createElement("option");
                etatOption4.setAttribute("value", "Satisfaisant");
                etatOption4.innerHTML = "Satisfaisant"
                etatOption5 = document.createElement("option");
                etatOption5.setAttribute("value", "Pour pièces");
                etatOption5.innerHTML = "Pour pièces";
                etat.appendChild(etatOption1);
                etat.appendChild(etatOption2);
                etat.appendChild(etatOption3);
                etat.appendChild(etatOption4);
                etat.appendChild(etatOption5);

                let submitTelephonie = document.createElement("input");
                submitTelephonie.setAttribute("name", "submitTelephonie");
                submitTelephonie.setAttribute("type", "submit");

                telephonieDiv.appendChild(brandTelephonieLabel);
                telephonieDiv.appendChild(brandTelephonie);
                telephonieDiv.appendChild(modelTelephonieLabel);
                telephonieDiv.appendChild(modelTelephonie);
                telephonieDiv.appendChild(colorTelephonieLabel);
                telephonieDiv.appendChild(colorTelephonie);
                telephonieDiv.appendChild(storageTelephonieLabel);
                telephonieDiv.appendChild(storageTelephonie);
                telephonieDiv.appendChild(etatLabel);
                telephonieDiv.appendChild(etat);
                telephonieDiv.appendChild(submitTelephonie);
                telephonieDiv.classList = "d-flex flex-column";
            } else {
                if(subCatDiv.hasChildNodes()){
                    subCatDiv.removeChild(subCatDiv.lastChild);
                    }
            }
        })


    } else {
        createForm.removeChild(createForm.lastChild);
    }

    
});


