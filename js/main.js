/* Scroll-bar в разделе doctors */
$(function(){                                                   
    $('.doсtors__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      }); 
});
/* Scroll-bar в разделе reviews */
$(function(){                                                   
  $('.reviews__slider').slick({
      infinite: true,
      dots: true,
      slidesToShow: 2,
      slidesToScroll: 2
    }); 
});
/* Плавный scroll с нафигации в header */
jQuery(document).ready(function(){                              
  jQuery('header a[href^="#"]').click( function(){
  var scroll = jQuery(this).attr('href');
  var destination = jQuery(scroll).offset().top;
  if (jQuery(scroll).length != 0) {
  jQuery('html, body').animate( { scrollTop: destination }, 800 );
  }
  return false;
    });
  })
/* Плавный scroll с нафигации в footer */
jQuery(document).ready(function(){                              
  jQuery('.footer__nav-block a[href^="#"]').click( function(){
  var scroll = jQuery(this).attr('href');
  var destination = jQuery(scroll).offset().top;
  if (jQuery(scroll).length != 0) {
  jQuery('html, body').animate( { scrollTop: destination }, 800 );
  }
  return false;
    });
  })
/* Плавный scroll с кнопок на главном экране */
  jQuery(document).ready(function(){                              
    jQuery('.info__buttons a[href^="#"]').click( function(){
    var scroll = jQuery(this).attr('href');
    var destination = jQuery(scroll).offset().top;
    if (jQuery(scroll).length != 0) {
    jQuery('html, body').animate( { scrollTop: destination }, 800 );
    }
    return false;
      });
    })

