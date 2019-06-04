// ---- Fixed Header ---- //
window.addEventListener("scroll", function(){
    var header = document.querySelector('.header');
    var link = document.querySelectorAll("nav ul li a");
  
    if(scrollY >= 100){
      header.classList.add("fixed");
      link.forEach((e) => {
        e.style.color = '#f1404b';
      });
    }else{
      header.classList.remove("fixed");
      link.forEach((e) => {
        e.style.color = '#f4f5f9';
      });
    }
  });
