let txt_depart = document.getElementById("txt_depart");
let txt_arrive = document.getElementById("txt_arrive");
let formDOM = document.getElementById("form_search");

console.log(formDOM);

let inputAirport = function (event) {
  // detect which input has been modified
  let input_modify = event.target;
  console.log(input_modify.name);
  //if input is empty, no need to send request
  if (input_modify.value == "") {
    //empty the ul
    input_modify.nextElementSibling.innerHTML = "";
    //stop the function
    return;
  }

  //if the input is not empty, launch the request to AJAX
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function (event) {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        try {
          let arrAirports = JSON.parse(xhr.responseText);
          createListResult(arrAirports, input_modify);
        } catch (error) {
          console.error("Error parsing JSON:", error);
        }
      } else {
        console.error("Server returned status:", xhr.status);
      }
    }
  };

  // Create a new form data object
  let formData = new FormData(formDOM);
  // Add the name of the input that has been modified
  formData.append("inputModify", input_modify.name);

  xhr.open("POST", "./formTraitement.php");
  xhr.send(formData);
};

txt_depart.addEventListener("keyup", inputAirport);
txt_arrive.addEventListener("keyup", inputAirport);

//function that create lis for the results of the search
//function receive the array of airports as input(completeAirport)

function createListResult(arr_airports, input_modify) {
  let ul = input_modify.nextElementSibling;
  ul.innerHTML = "";
  arrAirports.forEach(function (obj_airport) {
    let li = document.createElement("li");
    li.innerHTML =
      obj_airport.name + " - " + obj_airport.iata + obj_airport.description;
    //when we click on the li, we put the value of the li in the input text
    li.addEventListener("click", function () {
      input_modify.value = obj_airport.iata;
      //empty the ul
      ul.innerHTML = "";
      ul.appendChild(li);
    });
  });
}
