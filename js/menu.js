var size= document.getElementById("mySidenav");

function openNav() {
  if(size.style.width == "250px"){
    closeNav();
  }else{
    size.style.width = "250px";
  }
  
}

function closeNav() {
  size.style.width = "0";
}