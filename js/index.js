let searchEngine = document.querySelector("#category-search");
let searchForm = document.querySelector("#search-form");
let categorySelectDiv = document.querySelector("#category-select");

let typeGamingSearch = document.querySelector('#type-gaming-search');
let brandGamingSearch = document.querySelector('#brand-gaming-search')
let modelGamingSearch = document.querySelector('#model-gaming-search')
let brandTelephonieSearch = document.querySelector('#marque-telephonie-search');
let modelTelephonieSearch = document.querySelector('#model-telephonie-search');
let colorTelephonieSearch = document.querySelector('#color-telephonie-search');
let storageTelephonieSearch = document.querySelector('#storage-telephonie-search');
let typeImmoSearch = document.querySelector('#type-immo-search');
let surfaceImmoSearch = document.querySelector("#surface-immo-search");
let roomsImmoSearch = document.querySelector('#rooms-immo-search');

let brandCarSearch = document.querySelector('#brand-car-search');
let modelCarSearch = document.querySelector('#modele-car-search');
let kilometreCarSearch = document.querySelector('#kilometre-car-search');
let carburantCarSearch = document.querySelector('#carburant-car-search');
let gearboxCarSearch = document.querySelector('#gearbox-car-search');
let colorCarSearch = document.querySelector('#color-car-search');
let doorsCarSearch = document.querySelector('#doors-car-search');
let dinCarSearch = document.querySelector('#din-car-search');
let seatsCarSearch = document.querySelector('#seats-car-search');

let stateMultimediaSearch = document.querySelector('#state-multimedia-search');

// Triggering the appearing of the buttons to choose more criterias
searchEngine.addEventListener("change", ()=>{
    
    // I'm basically switching the class, since it doesn't mind for the request later on, it's not stocking datas contrarily to text inputs
    if(searchEngine.value == "Vente Immobilière"){

        typeImmoSearch.classList.replace("d-none", "d-block");
        surfaceImmoSearch.classList.replace("d-none", "d-block");
        roomsImmoSearch.classList.replace("d-none", "d-block");

    } else {
        typeImmoSearch.classList.replace("d-block", "d-none");
        surfaceImmoSearch.classList.replace("d-block", "d-none");
        roomsImmoSearch.classList.replace("d-block", "d-none");
    }

    
// That category is pretty tough
    if(searchEngine.value == "Voitures"){
        
        brandCarSearch.classList.replace("d-none", "d-block");
        modelCarSearch.classList.replace("d-none", "d-block");
        kilometreCarSearch.classList.replace("d-none", "d-block");
        carburantCarSearch.classList.replace("d-none", "d-block");
        gearboxCarSearch.classList.replace("d-none", "d-block");
        colorCarSearch.classList.replace("d-none", "d-block");
        doorsCarSearch.classList.replace("d-none", "d-block");
        dinCarSearch.classList.replace("d-none", "d-block");
        seatsCarSearch.classList.replace("d-none", "d-block");
    } else {
        brandCarSearch.classList.replace("d-block", "d-none");
        modelCarSearch.classList.replace("d-block", "d-none");
        kilometreCarSearch.classList.replace("d-block", "d-none");
        carburantCarSearch.classList.replace("d-block", "d-none");
        gearboxCarSearch.classList.replace("d-block", "d-none");
        colorCarSearch.classList.replace("d-block", "d-none");
        doorsCarSearch.classList.replace("d-block", "d-none");
        dinCarSearch.classList.replace("d-block", "d-none");
        seatsCarSearch.classList.replace("d-block", "d-none");
    }

    if(searchEngine.value == "Multimedia"){

        stateMultimediaSearch.classList.replace("d-none", "d-block");

    } else {
        stateMultimediaSearch.classList.replace("d-block", "d-none");
    }
    let subCatDivSearch = document.querySelector(".subcatdiv");
    if(subCatDivSearch.hasChildNodes()){
        let selectSubCat = document.querySelector('#subcat-selector');

        // Here, it is for the sub category that I will trigger the buttons
        // I simply won't do an Informatique button because the only criteria is the state, and it's already displayed
        // when choosing Multimedia
        selectSubCat.addEventListener("change", ()=>{
        
        if(selectSubCat.value == "Console"){
            
            typeGamingSearch.classList.replace("d-none", "d-block");
            brandGamingSearch.classList.replace("d-none", "d-block");
            modelGamingSearch.classList.replace("d-none", "d-block");
            } else {
                typeGamingSearch.classList.replace("d-block", "d-none");
                brandGamingSearch.classList.replace("d-block", "d-none");
                modelGamingSearch.classList.replace("d-block", "d-none");
                
            }
        if(selectSubCat.value == "Téléphonie"){
            brandTelephonieSearch.classList.replace("d-none", "d-block");
            modelTelephonieSearch.classList.replace("d-none", "d-block");
            colorTelephonieSearch.classList.replace("d-none", "d-block");
            storageTelephonieSearch.classList.replace("d-none", "d-block");

        } else {
            brandTelephonieSearch.classList.replace("d-block", "d-none");
            modelTelephonieSearch.classList.replace("d-block", "d-none");
            colorTelephonieSearch.classList.replace("d-block", "d-none");
            storageTelephonieSearch.classList.replace("d-block", "d-none");
        }
    
        })
    }
    
         
})
// Triggering the appearance of the sub-category selector
searchEngine.addEventListener("change", ()=>{
    let subCategoryDiv = document.querySelector(".subcatdiv")
    let selectSubCat = document.querySelector('#subcat-selector');
    if(searchEngine.value == "Multimedia"){
        
        subCategoryDiv.classList.replace("d-none", "d-block")
        
    } else {
        // I need to put the value to an empty string and hide 
        selectSubCat.value = "";   
        typeGamingSearch.classList.replace("d-block", "d-none");
        brandGamingSearch.classList.replace("d-block", "d-none");
        modelGamingSearch.classList.replace("d-block", "d-none");
        brandTelephonieSearch.classList.replace("d-block", "d-none");
        modelTelephonieSearch.classList.replace("d-block", "d-none");
        colorTelephonieSearch.classList.replace("d-block", "d-none");
        storageTelephonieSearch.classList.replace("d-block", "d-none");

        subCategoryDiv.classList.replace("d-block", "d-none")
       
    }
})

// If the price button is clicked, a form appear to choose a price
let priceBtn = document.querySelector("#price-search");
priceBtn.addEventListener("click", ()=>{
    let priceDiv = document.querySelector("#price-search-div");

    if(priceDiv.className == "d-none"){
        priceDiv.classList.replace("d-none", "d-block");
    } else {
        priceDiv.classList.replace("d-block", "d-none");
    }
})
// Here I will generate the advanced search engine
let typeImmoDiv = document.querySelector('#type-of-immo-div');
typeImmoSearch.addEventListener("click", ()=>{
    
    if (typeImmoDiv.innerHTML == ""){
        typeImmoDiv.innerHTML = '<p>Type de bien :</p><div><input type="checkbox" name="appartement" value="Appartement"><label for="appartement">Appartement</label></div><div><input type="checkbox" name="maison" value="Maison"><label for="maison">Maison</label></div>'
    } else {
        typeImmoDiv.innerHTML = "";
    }
})

let surfaceImmoDiv = document.querySelector("#surface-immo-div")
surfaceImmoSearch.addEventListener("click", ()=>{
    if(surfaceImmoDiv.innerHTML == ""){
        surfaceImmoDiv.innerHTML = '<p>Surface</p><label for="minsurface">Entre</label><input type="number" name="minsurface" min="0"> et <input type="number" name="maxsurface" min="0">m²'
    } else {
        surfaceImmoDiv.innerHTML = "";
    }
})

let roomsImmoDiv = document.querySelector('#rooms-immo-div');
roomsImmoSearch.addEventListener("click", ()=>{
    if(roomsImmoDiv.innerHTML == ""){
        roomsImmoDiv.innerHTML = '<p>Pièces</p><label for="minrooms">Entre</label><input type="number" name="minrooms" min="0" max="10"> et <input type="number" name="maxrooms" min="0" max="10">pièces'
    } else {
        roomsImmoDiv.innerHTML = "";
    }
})

let brandCarDiv = document.querySelector('#brand-car-div');
brandCarSearch.addEventListener("click", ()=>{
    if(brandCarDiv.innerHTML == ""){
        brandCarDiv.innerHTML = '<label for="brand-car">Marque</label><input type="text" name="brand-car">'
    } else {
        brandCarDiv.innerHTML = "";
    }
})
let modelCarDiv = document.querySelector('#model-car-div');
modelCarSearch.addEventListener("click", ()=>{
    if(modelCarDiv.innerHTML == ""){
        modelCarDiv.innerHTML = '<label for="model-car">Modèle</label><input type="text" name="model-car">';
    } else {
        modelCarDiv.innerHTML = "";
    }
})
let kilometresCarDiv = document.querySelector('#kilometres-car-div');
kilometreCarSearch.addEventListener("click", ()=>{
    if(kilometresCarDiv.innerHTML == ""){
        kilometresCarDiv.innerHTML = '<p>Kilométrage</p><label for="minkilometres">Entre</label><input type="number" name="minkilometres" min="0"> et <input type="number" name="maxkilometres" min="0" >km';
    } else {
        kilometresCarDiv.innerHTML = "";
    }
})
let carburantCarDiv = document.querySelector('#carburant-car-div');
carburantCarSearch.addEventListener("click", ()=>{
    if(carburantCarDiv.innerHTML == ""){
        carburantCarDiv.innerHTML = '<p>Carburant :</p><div><input type="checkbox" name="diesel" value="Diesel"><label for="diesel">Diesel</label></div><div><input type="checkbox" name="essence" value="Essence"><label for="carburant">Essence</label></div><div><input type="checkbox" name="electrique" value="Électrique"><label for="carburant">Électrique</label></div>';
    } else {
        carburantCarDiv.innerHTML= "";
    }
})
let gearboxCarDiv = document.querySelector('#gearbox-car-div');
gearboxCarSearch.addEventListener('click', ()=>{
    if(gearboxCarDiv.innerHTML == ""){
        gearboxCarDiv.innerHTML = '<p>Boîte de vitesse :</p><div><input type="checkbox" name="automatique"><label for="gearbox">Automatique</label></div><div><input type="checkbox" name="manuelle"><label for="gearbox">Manuelle</label></div>';
    } else {
        gearboxCarDiv.innerHTML = "";
    }
})
let colorCarDiv = document.querySelector('#color-car-div');
colorCarSearch.addEventListener('click', ()=>{
    if(colorCarDiv.innerHTML == ""){
        colorCarDiv.innerHTML = '<label for="color-car">Couleur</label><input type="text" name="color-car">';
    } else {
        colorCarDiv.innerHTML = "";
    }
})
let doorsCarDiv = document.querySelector('#doors-car-div');
doorsCarSearch.addEventListener('click', ()=>{
    if(doorsCarDiv.innerHTML == ""){
        doorsCarDiv.innerHTML = '<label for="doors-car">Nombre de portes</label><input type="number" name="doors-car" min="0" max="10">';
    } else {
        doorsCarDiv.innerHTML = "";
    }
})
let dinCarDiv = document.querySelector('#din-car-div');
dinCarSearch.addEventListener('click', ()=>{
    if(dinCarDiv.innerHTML == ""){
        dinCarDiv.innerHTML = '<p>Puissance DIN</p><label for="mindin">Entre</label><input type="number" name="mindin" min="0"> et <input type="number" name="maxdin" min="0" >ch';
    } else {
        dinCarDiv.innerHTML = "";
    }
})
let seatsCarDiv = document.querySelector('#seats-car-div');
seatsCarSearch.addEventListener('click', ()=>{
    if(seatsCarDiv.innerHTML == ""){
        seatsCarDiv.innerHTML = '<label for="seats-car">Sièges</label><input type="number" name="seats-car" min="0" max="10">';
    } else {
        seatsCarDiv.innerHTML = "";
    }
})

let typeGamingDiv = document.querySelector('#type-console-div');
typeGamingSearch.addEventListener('click', ()=>{
    if(typeGamingDiv.innerHTML == ""){
        typeGamingDiv.innerHTML = '<label for="type-gaming">Type :</label><select name="type-gaming"><option value=""></option><option value="Console">Console</option><option value="Jeux">Jeux</option><option value="Accessoires">Accessoires</option></select>'
    } else {
        typeGamingDiv.innerHTML = "";
    }
})

let brandGamingDiv = document.querySelector('#brand-gaming-div');
brandGamingSearch.addEventListener('click', ()=>{
    if(brandGamingDiv.innerHTML == ""){
        brandGamingDiv.innerHTML = '<label for="brand-gaming">Marque</label><input type="text" name="brand-gaming">'
    } else {
        brandGamingDiv.innerHTML = '';
    }
})

let modelGamingDiv = document.querySelector("#model-gaming-div");
modelGamingSearch.addEventListener('click', ()=>{
    if(modelGamingDiv.innerHTML == ""){
        modelGamingDiv.innerHTML = '<label for="model-gaming">Modèle</label><input type="text" name="model-gaming">';
    } else {
        modelGamingDiv.innerHTML = "";
    }
})

let brandTelephonieDiv = document.querySelector('#brand-telephonie-div');
brandTelephonieSearch.addEventListener('click', ()=>{
    if(brandTelephonieDiv.innerHTML == ""){
        brandTelephonieDiv.innerHTML = '<label for="brand-telephonie">Marque</label><input type="text" name="brand-telephonie">';
    } else {
        brandTelephonieDiv.innerHTML = "";
    }
})

let modelTelephonieDiv = document.querySelector('#model-telephonie-div');
modelTelephonieSearch.addEventListener('click', ()=>{
    if(modelTelephonieDiv.innerHTML == ""){
        modelTelephonieDiv.innerHTML = ' <label for="model-telephonie">Modèle</label><input type="text" name="model-telephonie">';
    } else {
        modelTelephonieDiv.innerHTML = "";
    }
})

let colorTelephonieDiv = document.querySelector('#color-telephonie-div');
colorTelephonieSearch.addEventListener('click', ()=>{
    if(colorTelephonieSearch.innerHTML == ""){
        colorTelephonieDiv.innerHTML ='<label for="color-telephonie">Couleur</label><input type="text" name="color-telephonie">';
    } else {
        colorTelephonieDiv.innerHTML = "";
    }
})

let storageTelephonieDiv = document.querySelector('#storage-telephonie-div');
storageTelephonieSearch.addEventListener('click', ()=>{
    if(storageTelephonieDiv.innerHTML == ""){
        storageTelephonieDiv.innerHTML = '<label for="storage-telephonie">Capacité de stockage</label><input type="number" name="storage-telephonie">'
    } else {
        storageTelephonieDiv.innerHTML = "";
    }
})

let stateMultimediaDiv = document.querySelector('#state-multimedia-div');
stateMultimediaSearch.addEventListener('click', ()=>{
    if(stateMultimediaDiv.innerHTML == ""){
        stateMultimediaDiv.innerHTML = ' <label for="state-multimedia">État</label><select name="state-multimedia" id="state-multimedia-select"><option value=""></option><option value="Neuf">Neuf</option><option value="Très bon">Très bon</option><option value="Bon">Bon</option><option value="Satisfaisant">Satisfaisant</option><option value="Pour pièces">Pour pièces</option></select>'
    } else {
        stateMultimediaDiv.innerHTML = "";
    }
})

