let depart = document.getElementById("txt_depart");
let arrive = document.getElementById("txt_arrive");
let iconSwitch = document.getElementById("icon_switch");

// Switch depart and arrive
iconSwitch.addEventListener("click", function(event){
    let temp = depart.value;
    depart.value = arrive.value;
    arrive.value = temp;
});


