jQuery(document).ready(function(){
  //============================== SELECT BOX =========================
    $('.select-drop').selectbox();

  //============================== MENU DROPDOWN ON HOVER =========================
  $('.nav .dropdown').hover(function() {
    $(this).addClass('open');
  },
  function() {
    $(this).removeClass('open');
  }
  );

  //============================== BACK TO TOP =========================
  $(document).ready(function(){ 
    $(window).scroll(function(){ 
      if ($(this).scrollTop() > 100) { 
        $('#backToTop').css("opacity", 1); 
      } else { 
        $('#backToTop').css("opacity", 0); 
      } 
    }); 
  });

  //============================== Product Gallery =========================
  var galleryThumb = $('.product-gallery-thumblist a'),
      galleryPreview = $('.product-gallery-preview > li');

  
  galleryThumb.on('click', function(e) {
    var target = $(this).attr('href');

    galleryThumb.parent().removeClass('active');
    $(this).parent().addClass('active');
    galleryPreview.removeClass('current');
    $(target).addClass('current');

    e.preventDefault();
  });

});