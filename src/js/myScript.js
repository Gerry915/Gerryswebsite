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

$(function() {
    // This will select everything with the class smoothScroll
    // This should prevent problems with carousel, scrollspy, etc...
    $('.smoothScroll').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000); // The number here represents the speed of the scroll in milliseconds
          return false;
        }
      }
    });
  });
  
  // Change the speed to whatever you want
  // Personally i think 1000 is too much
  // Try 800 or below, it seems not too much but it will make a difference

