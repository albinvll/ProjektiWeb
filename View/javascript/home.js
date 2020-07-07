function Buy(title){
    var queryString ='?'+title;
    window.location.href='product.html'+queryString;
}

fixedPosition();
function fixedPosition(){
    var height = document.getElementById("upp").offsetHeight + 30;
    var main = document.getElementsByClassName("main")[0];
    main.style.marginTop=height+"px";
}

function right(){
    var slides = document.getElementsByClassName('slide');
    var index =0;
    for(var slide of slides){
        index++;
        if(slide.classList.contains('show-slide') && index<slides.length){
            slide.classList.remove('show-slide');
            slide.classList.add('remove-slide');
            slide.nextElementSibling.classList.remove('remove-slide');
            slide.nextElementSibling.classList.add('show-slide');
            break;
        } // else if(slide.classList.contains('show-slide') && index==slides.length) {
            // slide.classList.remove('show-slide');
            // slide.classList.add('remove-slide');
            // slides[0].classList.remove('remove-slide');
            // slides[0].classList.add('show-slide');
            // break;
        // }
    }
}

function left(){
    var slides = document.getElementsByClassName('slide');
    for(var i=0 ;i<slides.length;i++){
        if(slides[i].classList.contains('show-slide') && i!=0){
            slides[i].classList.remove('show-slide');
            slides[i].classList.add('remove-slide');
            slides[i].previousElementSibling.classList.remove('remove-slide');
            slides[i].previousElementSibling.classList.add('show-slide');
            break;
        } // else if(slides[i].classList.contains('show-slide') && i==0){
            // slides[i].classList.remove('show-slide');
            // slides[i].classList.add('remove-slide');
            // slides[slides.length-1].classList.remove('remove-slide');
            // slides[slides.length-1].classList.add('show-slide');
            // break;   
        // }
    }
}

var input = document.getElementById("searchBook");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   document.getElementById("searchButton").click();
  }
});

function search(){
    var count =0;
    var input = document.getElementById("searchBook").value.trim();
    if(input == ""){
        alert("Please write the book title");
    } else {
        var books = document.getElementsByClassName('book');
        for(var i=0;i<books.length;i++){
            if(books[i].children[1].children[0].children[0].textContent.trim().toLowerCase().includes(input.toLowerCase())){
                books[i].style.display="block";
                window.scrollTo(0, books[i].offsetTop-300);
            } else {
                books[i].style.display="none";
            }
        }
    }
}
