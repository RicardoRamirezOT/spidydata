// JS/JQuery section that gives dynamism to icon click.
// Each function hides all textual elements on the left side and displays the right message.
// Also, each function appends a class to icon to give a new border color when focus.
$("#neutral").prop("checked", true);
$("#fimg").on("change", function(){
  $(stopInterval);
  $(".oc").fadeOut(800);
  $("#i-it").delay(750).fadeIn(800);
  $(".coinch").removeClass("b-selec");
  $("#focicon1").addClass("b-selec");
});
$("#simg").on("change", function(){
  $(stopInterval);
  $(".oc").fadeOut(800);
  $("#ii-it").delay(750).fadeIn(800);
  $(".coinch").removeClass("b-selec");
  $("#focicon2").addClass("b-selec");
});
$("#timg").on("change", function(){
  $(stopInterval);
  $(".oc").fadeOut(800);
  $("#iii-it").delay(750).fadeIn(800);
  $(".coinch").removeClass("b-selec");
  $("#focicon3").addClass("b-selec");
});
$("#foimg").on("change", function(){
  $(stopInterval);
  $(".oc").fadeOut(800);
  $("#iv-it").delay(750).fadeIn(800);
  $(".coinch").removeClass("b-selec");
  $("#focicon4").addClass("b-selec");
});
$("#fiimg").on("change", function(){
  $(stopInterval);
  $(".oc").fadeOut(800);
  $("#v-it").delay(750).fadeIn(800);
  $(".coinch").removeClass("b-selec");
  $("#focicon5").addClass("b-selec");
});
$("#sc-js").click(function(){
  $(".oc").fadeOut(800);
  $("#iv-it").delay(750).fadeIn(800);
  swiper.slideTo(4,300,true);
  $(stopInterval);
  $(".coinch").removeClass("b-selec");
  $("#focicon5").addClass("b-selec");
});
$("#sc-js2").click(function(){
  $(".oc").fadeOut(800);
  $("#iv-it").delay(750).fadeIn(800);
  $(stopInterval);
  $(".coinch").removeClass("b-selec");
  $("#focicon5").addClass("b-selec");
});
// JS/JQuery function to change width resolution on window.chage event. This is event is trigger by default in browsers.
function diffwidth(){
  if($(window).width() < 852){
    $(".content").fadeOut(500);
    $(".swiper-container").fadeIn(900);
  }
  if($(window).width() >= 852){
    $(".swiper-container").fadeOut(500);
    $(".content").fadeIn(900);
  }
  if($(window).width() < 580){
    $(".logo").fadeOut(300);
    $("#logo-f").fadeIn(300)
  }
  if($(window).width() > 580){
    $(".logo").fadeIn(300);
    $("#logo-f").fadeOut(300)
  }
}
$(window).resize(function(){
  $(diffwidth);
});
// JS main variable of Swiper JS plugin of mobile view
var swiper = new Swiper('.swiper-container', {
  pagination: '.swiper-pagination',
  direction: 'vertical',
  slidesPerView: 1,
  paginationClickable: true,
  spaceBetween: 30,
  mousewheelControl: true,
  parallax: true,
  speed: 600,
});
// JS/JQuery function to give autonomous rotation of textual elements if user does not give input
var timer = null;
function loopi(){
  var con = 1;
  timer = setInterval(function(){
    var nam = (".rimg"+con);
    $(".oc").fadeOut(800);
    $(nam).delay(300).fadeIn(800);
    var icnam = ("#focicon"+con);
    $(".coinch").removeClass("b-selec");
    $(icnam).addClass("b-selec");
    if(con<=4){
      con += 1;
    } else{
      con = 1;
    }
  },4000);
}
$(loopi);
// JS/JQuery function to stop autonomous rotation of textual elements
function stopInterval(){
  clearInterval(timer);
} 
// JS Code for registration message on desktop and mobile view
$(window).on("load",function(){
  if($("#activethanks").length){
    $("#activethanks").click(function(){
      if($(window).width() < 852){
        $(".swiper-wrapper").append(
          "<div class='swiper-slide'><div class='text'><p>Solicitud registrada<br>Pronto nos pondremos en contacto contigo</p></div></div>"
        );
        swiper.update();
        swiper.slideTo(7,300,true);
      }
      if($(window).width() >= 852){
        $(stopInterval);
        $(".coinch").removeClass("b-selec");
        $(".oc").fadeOut(800);
        $("#desktext").append(
          "<p id='oc'>Solicitud registrada<br>Pronto nos pondremos en contrato contigo</p>"
        );
      }
    });
    $("#activethanks").click();
  };
});