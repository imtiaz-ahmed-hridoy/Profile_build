//gsap

import { gsap } from "gsap";

// this 2 script for navbar home and contact icon animation

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        document.getElementById("home").classList.remove("hidden");
        document.getElementById("home").style.opacity = 1;
    }, 500);
});

//this script for home icon end

//this script for contact icon

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        document.getElementById("call").classList.remove("hidden");
        document.getElementById("call").style.opacity = 1;
    }, 800);
});

//this 2 script for navbar home and contact icon animation end

//this script for menu list start
const list = document.querySelectorAll(".list");

function activeLink() {
    list.forEach((item) => item.classList.remove("active"));
    this.classList.add("active");
}

list.forEach((item) => item.addEventListener("click", activeLink));
//this script for menu list end

var tl = gsap.timeline();

tl.from(".list", {
    y: 70,
    duration: 1.5,
    rotate: 180,
    stagger: 0.3,
});



//
//
// //
(function() {
    $(window).on('scroll',function(){
        var WindowTop = $(window).scrollTop();
        $('section').each(function(i){
            if(WindowTop > $(this).offset().top - 80 &&
               WindowTop < $(this).offset().top + $(this).outerHeight(true)
              ){
                $('.nav > li').removeClass('active');
     $('.nav').eq(i).find('li').addClass('active');
            }
        });
    });

		  $('a[href*=\\#]:not([href=#])').click(function() {

			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return false;
			  }
			}

		  });



		});
