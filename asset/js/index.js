$('#signup').click(function() {
   $('#form-container').show();
   $('.login-inputs').slideUp('fast','linear');
   $('#forgot-password').slideUp('slow','linear');
   $('.signup-inputs').slideDown('fast','linear');
   $('#signup-holder').css('padding-top','35px');
   $('#login-holder').css('padding-top','100px');
   $('#btn-login').css('padding-top','100px');
   $('#signup').css('margin','25px 50px');
   $('#awe').show();
   $('.login-btn').slideUp();
   $("#login").slideDown();
   $("#signup").slideDown();
   $(this).hide()
});
$('#login').click(function() {
   $('.signup-inputs').slideUp('fast','linear');
   $('#forgot-password').slideDown('slow','linear');
   $('.login-inputs').slideDown('fast','linear');
   $('#signup-holder').css('padding-top','100px');
   $('#login-holder').css('padding-top','55px');
   $('#signup').css('margin','15px 50px');
   $('.login-btn').slideDown();
   $("#login").slideUp();
});


$(document).ready(function(){
   setTimeout(function(){
      $('.login-btn').slideUp();
      $('#form-container').hide();
   }, 20);
});