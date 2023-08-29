let txt_depart = document.getElementById("txt_depart");
let formDOM = document.getElementById("form_Search");

let inputAirport = function(event){
//detect which input has been modified
    let input_modify = event.target;
    console.log(input_modify.name);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(event){
        if (xhr.readyState == 4){
            console.log(xhr.responseText);
        }
    };
    
    //Create a new form data object
    let formData = new FormData(formDOM);
    //Add the name of the input that has been modified
    formData.append("input_modify", input_modify.name);

    xhr.open("POST", "./formTraitement.php");
    xhr.send(formData);
};

txt_depart.addEventListener("keyup", inputAirport);

txt_arrive.addEventListener("keyup", inputAirport);