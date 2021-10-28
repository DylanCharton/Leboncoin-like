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

// Switching the div for the sub-category choice from block to none

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

// Triggering the appearing of the buttons to choose more criterias
searchEngine.addEventListener("change", ()=>{
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

searchEngine.addEventListener("change", ()=>{
    let subCategoryDiv = document.querySelector(".subcatdiv")
    let selectSubCat = document.querySelector('#subcat-selector');
    if(searchEngine.value == "Multimedia"){
        
        subCategoryDiv.classList.replace("d-none", "d-block")
        
    } else {
        
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




       

