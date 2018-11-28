jQuery(document).ready(function ($) {

  $('#content .sidebar .close').click(function () {
    $('#content .sidebar').addClass('mobile-hide');
  });

  if ($('.current_page_item a').length) {
    $('.mobile-menu strong').html($('.current_page_item a').text());
  }

  $('.mobile-menu a').click(function (event) {
    $('#content .sidebar').toggleClass('mobile-hide');

    event.preventDefault();
  });

});