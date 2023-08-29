let btn_afficher = document.getElementById("btn_afficher");
let div_reponse = document.getElementById("div_reponse");



btn_afficher.addEventListener("click", function(event){
    event.preventDefault();

    //erase the previous content of div_reponse
    div_reponse.innerHTML = "";

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "./formTraitement.php");
    xhr.send(null);

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
//xhr.reponseText is a string only, you can work with it with string only methods
//            console.log(typeof xhr.responseText);
//JSON.parse() is a method that converts a string into an object, you can work with this further
            let arrAirports = JSON.parse(xhr.responseText);
//            console.log(arrAirports);
//            console.log(typeof(arrAirports));            
            let ul = document.createElement("ul");

            for (index in arrAirports) {
                let aAirport = arrAirports[index];
            
 //               console.log(aAirport.img);
            
                let li = document.createElement("li");
            
                // Adding images to the list
                let img = document.createElement("img");
                img.src = "./images/" + aAirport.img;
                // Set a fixed width and height for the images using CSS
                img.style.width = "12em"; // Adjust this value as needed
                img.style.height = "8em"; // Adjust this value as needed
                img.style.border = "2px solid grey"; 
            
                li.appendChild(img);  // Append the image element to the list item
            
                // Adding text content to the list item
                li.innerHTML += "<br>"+ arrAirports[index].iata + " : " + arrAirports[index].description;
            
                ul.appendChild(li);
            }
            
            div_reponse.appendChild(ul);
            
            }

        }});

        /*
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
*/

