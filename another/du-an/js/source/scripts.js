 //chu nhap nhay
 $(document).ready(function(){
    $('.news').each(function() {
        var elem = $(this);
        setInterval(function() {
            if (elem.css('visibility') == 'hidden') {
                elem.css('visibility', 'visible');
	        } else {
	            elem.css('visibility', 'hidden');
	        }    
	    }, 500);
	});
 });




//click dropdown-hue
 $(document).ready(function(){
    $('.dropdown-hue > a').click(function() {
       $('.sub-menu').toggle(400);
  });
});


/* When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementByNameClass("ul > sub-menu");
    popup.classList.toggle("show");
}
*/


/*function myFunction() {
    var x = document.getElementByClassName("ul.sub-menu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
*/

//click dropdown-food
 $(document).ready(function (e) {
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".dropdown-toggle").click(function () {
        var t = e(this).parents(".dropdown-food").children(".dropdown-menu").is(":hidden");
        e(".dropdown-food .dropdown-menu").hide();
        e(".dropdown-food .dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".dropdown-food").children(".dropdown-menu").toggle().parents("dropdown-food").children(".dropdown-toggle").addClass("active")
        }
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("dropdown-food")) e(".dropdown-food .dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("dropdown-food")) e(".dropdown-food .dropdown-toggle").removeClass("active");
    })
});
 



//slide bannner anh
 $(document).ready(function(){
    setInterval(function(){
        $('.drop-slide').animate({'margin-left':'-=675'},1000,function(){
            $('.myslide:first').appendTo('.drop-slide');
            $('.drop-slide').css('margin-left','0');
        });
    },3000);
 });







