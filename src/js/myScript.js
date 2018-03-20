function showCoding(button_id){
    console.log(button_id);
    var coding = document.getElementById("coding-section");
    var design = document.getElementById("design-section");

    if(button_id === "coding-btn"){
        coding.style.display = "block";
        design.style.display = "none";
    }else if(button_id === "design-btn"){
        coding.style.display = "none";
        design.style.display = "block";
    }
}