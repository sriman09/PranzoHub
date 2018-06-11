
function selectFunction() {

	var vegselect = document.getElementById("veg-select");
    var veg = document.getElementById("veg");

    var nonvegselect = document.getElementById("nonveg-select");
    var nonveg = document.getElementById("nonveg");

    if (vegselect.checked == true){
        veg.classList.remove("hidden");
    } else {
       	veg.classList.add("hidden");
    }

    if (nonvegselect.checked == true){
        nonveg.classList.remove("hidden");
    } else {
       	nonveg.classList.add("hidden");
    }

    var message = document.getElementById("warning");
    var smoothieselect = document.getElementById("smoothie-select");
    var smoothie = document.getElementById("smoothie");

    if (smoothieselect.checked == true){
        smoothie.classList.remove("hidden");
    } else {
       smoothie.classList.add("hidden");
    }

    if (smoothieselect.checked == true){
    	if((vegselect.checked == true) || (nonvegselect.checked == true)){
    		warning.classList.add("hidden");
    	} else {
       		warning.classList.remove("hidden");
    	}
    } else {
    	warning.classList.add("hidden");
    }

}


