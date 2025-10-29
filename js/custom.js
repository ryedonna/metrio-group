jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
        $(".sidebar-submenu").slideUp(200);
        if ($(this).parent().hasClass("active")) {
            $(".sidebar-dropdown").removeClass("active");
            $(this).parent().removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this).next(".sidebar-submenu").slideDown(200);
            $(this).parent().addClass("active");
        }
    });

    $(".close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
    });
    $(".show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
    });

});

$(document).ready(function() {
    $('#back-to-top, #back-to-top-2').click(function(e) {      // When arrow is clicked
        e.preventDefault(); // prevent hard jump, the default behavior
        $('html, body').stop().animate({
            scrollTop : 0                       // Scroll to top of body
        }, 600);

        return false;
    });

    $('.btn-link').click(function() {
        $(this).addClass('active');
        $(this).parent().parent().addClass('active');
        $(this).parent().parent().parent().addClass('active');
        $(this).find('i').addClass('fa-sort-up');
    });

    $('#accordionExample').on('hidden.bs.collapse', function () {
        $('.btn-link').removeClass('active');
        $('.metrio-card-header').removeClass('active');
        $('.metrio-card').removeClass('active');
        $('.fas').removeClass('fa-sort-up');
    });

    $('#carouselExampleIndicators').carousel({
      interval: 2000
    })

    $('#carouselUpdate').carousel({
      interval: false
    })

    $('.carousel-update .carousel-item').each(function(){
        var next = $(this).next();
        if (!next.length) {
        next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
              }
            
            next.children(':first-child').clone().appendTo($(this));
          }
    });

    $('.contactForm').on('submit', function(e) {
        e.preventDefault();

        var input = $('.treeo-input');
        var name = document.getElementById("name").value;
        var contact = document.getElementById("email").value;
        var email = document.getElementById("subject").value;
        var about = document.getElementById("message").value;


        $.ajax({
            type: "POST",
            url: "function/contactform.php?name="+name+"&email="+email+"&subject="+contact+"&message="+about,
            data: {name, contact, email, about},
        }).done(function( msg ) {
            console.log(msg);
            // alert(msg);
            if (msg == 'OK') {
                $("#sendmessage").addClass("show");
                $("#errormessage").removeClass("show");
                $('.treeo-input').find("input").val("");
                $('.treeo-check-input').prop('checked', false);
                $('.treeo-check-input').removeAttr("value");
            } else {
                $("#sendmessage").removeClass("show");
                $("#errormessage").addClass("show");
            }
        });
    });

    var count  = 0
    $('.model-tmj-1').on('shown.bs.modal', function () {
        if (count === 1) return;
        $('.lightSlider').addClass('hidden');
            $('.lightSlider').lightSlider({
            gallery:true,
            item:1,
            thumbItem:6,
            slideMargin: 0,
            loop:true,
            onSliderLoad: function() {
                $('.lightSlider').removeClass('hidden');
            } 
        });
        count++;
   });
});

$(window).scroll(function() {
    if ($(this).scrollTop() >= 50 && $(this).scrollTop() + $(this).height() != $(document).height()) {        // If page is scrolled more than 50px
        $('.back-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('.back-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
