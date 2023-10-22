$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:5,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

var menuIcon = document.getElementById("menu-icon")
var dropdown = document.getElementById("dropdown")
var open = false;
menuIcon.addEventListener("click", function(){
    if(open == false){
        dropdown.style.display = "block"
        open = true
    }else{
        dropdown.style.display = "none"
        open = false
    }
})

// let scrollPosition = 0;

// function scrollImages() {
//     const imageContainers = document.querySelectorAll('.image-container');

//     imageContainers.forEach((container, index) => {
//         const offset = (window.innerHeight - container.offsetHeight) * index;
//         container.style.transform = `translateY(${scrollPosition + offset}px)`;
//     });

//     scrollPosition += 2; // Adjust the scroll speed as needed

//     requestAnimationFrame(scrollImages);
// }

// scrollImages();