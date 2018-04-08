function showCoding(button_id){
    console.log(button_id);
    var coding = document.getElementById("coding-section");
    var design = document.getElementById("design-section");

    var button = document.getElementById(button_id);

    if(button_id === "coding-btn"){
        coding.style.display = "block";
        design.style.display = "none";
        button.style.backgroundColor = "#333333";
        button.style.color = "white";
        document.getElementById("design-btn").style.backgroundColor = "white";
        document.getElementById("design-btn").style.color = "#333333";
    }else if(button_id === "design-btn"){
        coding.style.display = "none";
        design.style.display = "block";
        button.style.backgroundColor = "#333333";
        button.style.color = "white";
        document.getElementById("coding-btn").style.backgroundColor = "white";
        document.getElementById("coding-btn").style.color = "#333333";
    }
}



