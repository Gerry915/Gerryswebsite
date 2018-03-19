function showCoding(button_id){
    console.log(button_id);
    var x = document.getElementById("coding-section");
    var y = document.getElementById("design-section");

    if(button_id === "coding-btn"){
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
    }else if(button_id === "design-btn"){
        x.style.display = "none";
        y.style.display = "block";
        z.style.display = "none";
    }
}