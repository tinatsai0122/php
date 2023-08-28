let input_code = document.getElementById("code");
let div_reponse = document.getElementById("div_reponse");
let form_Search = document.getElementById("form_Search");


input_code.addEventListener("keyup", function(event){
    event.preventDefault();
    console.log(input_code.value);   
    
    let xhr = new XMLHttpRequest();
    //ceate a new form data object
    let form = new FormData(form_Search);

    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4){
            div_reponse.innerHTML = xhr.responseText;
    };
};
    xhr.open("POST", "./formTraitement.php");
    xhr.send(form);
});

    