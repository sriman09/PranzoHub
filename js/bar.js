// jQuery(document).ready(function($){
//   // Detect if this is a hero image page by looking for the #heroimage ID
//   if( $('#heroimage').length ){
//     // get the value of the bottom of the #heroimage element by adding the offset of that element plus its height, set it as a variable
//     var mainbottom = $('#heroimage').offset().top + $('#heroimage').outerHeight(true);

//     $(window).on('scroll',function(){
//       var stop = Math.round($(window).scrollTop());
//       // If the use has scrolled past the bottom of the hero image
//       if (stop > mainbottom) {
//           $('.navbar').addClass('pasthero');
//       } else {
//       // if the user has scrolled back up above the bottom of the hero image
//           $('.navbar').removeClass('pasthero');
//       }
//     });
//   } else {
//   // if no hero image present, add the opaque class right away
//      $('.navbar').addClass('pasthero');
//   }
// });

$(window).scroll(function() {
  if ($(document).scrollTop() > 20) {
    $('.navbar').addClass('drop');
  } else {
    $('.navbar').removeClass('drop');
  }
});
