
function myFunction(){
    var x = document.getElementById("myInput");
    var y = document.getElementById("hide");
    var z = document.getElementById("hide2");

    if(x.type === 'password'){
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";
    }
    else {
        x.type = "text";
        y.style.display = "none";
        z.style.display = "block";
    }
}

$('.header-slider').owlCarousel({
    center: true,
    stagePadding: 50,
    loop: false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

const nextIcon = '<img src="assets/img/right-arrow.svg" alt="right" class="img-arrow">';
const prevIcon = '<img src="assets/img/left-arrow.svg" alt="left" class="img-arrow">';


$('.owl-carousel').owlCarousel({
    loop: false,
    margin: 15,
    dots: false,
    nav: true,
    navText: [
        prevIcon,
        nextIcon
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
