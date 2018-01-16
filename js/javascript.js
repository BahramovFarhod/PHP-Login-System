// @@@@@@@@@@@@ SCRIPT voor SCROLL @@@@@@@@@@@@@@@@@@@@@

$(window).scroll(function(){
  if($(this).scrollTop() > 1000){
    $('.uvdscpr').hide();
  }
  else {
 $('.uvdscpr').show();
  }
  
});