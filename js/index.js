console.log("coucou");

let searchEngine = document.querySelector("#category-search");
let searchForm = document.querySelector("#search-form");
searchEngine.addEventListener("change", ()=>{
    if(searchEngine.value == "Multimedia"){
        let subCatDivSearch = document.createElement("div");
        searchForm.appendChild(subCatDivSearch);
            
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

        subCatDivSearch.appendChild(selectMultimediaLabel);
        subCatDivSearch.appendChild(selectMultimedia);
        subCatDivSearch.setAttribute("class", "subcatdiv")
    } else {
        let subCatDivSearch = document.querySelector(".subcatdiv");
        searchForm.removeChild(subCatDivSearch);
       
    }
})