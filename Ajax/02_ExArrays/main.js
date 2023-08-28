let btn_afficher = document.getElementById("btn_afficher");
let div_reponse = document.getElementById("div_reponse");



btn_afficher.addEventListener("click", function(event){
    event.preventDefault();

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "./formTraitement.php");
    xhr.send(null);

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            let arrAirports = JSON.parse(xhr.responseText);
            console.log(arrAirports);
            console.log(typeof(arrAirports));

            let ul = document.createElement("ul");
            
            div_reponse.innerHTML = "";
            for(index in arrAirports){
                let li = document.createElement("li");
                li.innerHTML = arrAirports[index];
                ul.appendChild(li);
            }
            div_reponse.appendChild(ul)

        };  
};
    console.log("Coucou click")
}) ;

