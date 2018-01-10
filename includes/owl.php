
<script src="owl/jquery.min.js"></script>
<script src="owl/owl.carousel.min.js"></script>
<script>
$('.rightslide ').owlCarousel({
loop:true,
nav:true,
autoplay: true,
autoplayTimeout: 1500,
animateOut: 'fadeOut',
mouseDrag:false,
dots:false,
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

$('.middleslide ').owlCarousel({
loop:true,
nav:true,
autoplay: true,
autoplayTimeout: 3000,
animateOut: 'fadeOut',
mouseDrag:false,
dots:false,
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

$('.leftslide ').owlCarousel({
loop:true,
nav:true,
autoplay: true,
autoplayTimeout: 4500,
animateOut: 'fadeOut',
mouseDrag:false,
dots:false,
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
</script>

<script>
function showfirst() {
document.getElementById('banner-1').style.zIndex='4';
document.getElementById('banner-3').style.zIndex='1';
document.getElementById('banner-2').style.zIndex='2';
}

function showsecond() {
document.getElementById('banner-2').style.zIndex='4';
document.getElementById('banner-1').style.zIndex='1';
document.getElementById('banner-3').style.zIndex='2';
}

function showthird() {
document.getElementById('banner-3').style.zIndex='4';
document.getElementById('banner-2').style.zIndex='1';
document.getElementById('banner-1').style.zIndex='2';
}

</script>
<!-- <script>
$(".item1").click(function(){
$(".item1").addClass("add");
});

</script> -->
<!-- default
$('.owl-carousel ').owlCarousel({
loop:true,
nav:true,
autoplay: true,
autoplayTimeout: 6500,
animateOut: 'fadeOut',
dots:false,
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

-->