(function( $ ) {

  $('#navButton').click(function() {
    $('#nav').addClass('active');
  });

  $('#navClose').click(function() {
    $('#nav').removeClass('active');
  });

  $('#loadComments').click(function() {
    $('.article-footer').toggleClass('active');
  });

})( jQuery );
