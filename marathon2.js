var counter = 1;
  setInterval(function()  {
    document.getElementById('radio'+ counter).checked = true;
    counter++; 

    if(counter>4){
      counter=1
    }

  }, 3000);

  function myFunction() {
    let x = document.getElementsByClassName("pagestiniwindegipages");
    if(x[0].style.display === "flex") {
      x[0].style.display = "none";
    }else {
      x[0].style.display = "flex";
    }
  }

  