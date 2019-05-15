var windowWidth = $(window).width();

$(document).ready(function() {
   $(".nav-tabs li:first-child").click(function(event) {
       $("#new").addClass('fade')
   });
});





/*
 *	Form Search Header
 */

$(document).ready(function() {
	$('.drop-down').click(function() {
		if($(this).find("ul").is(':visible')) {
			$(this).find("ul").slideUp("slow"), 
			$(this).find(".selected").removeClass("active-secected"), 
			$(".drop-down").find(".selected").removeClass("active-secected")
		}
		else {
			$(".drop-down ul").slideUp("slow"), 
			$(".drop-down").find(".selected").removeClass("active-secected"), 
			$(this).find("ul").slideToggle("slow"), 
			$(this).find(".selected").toggleClass("active-secected")			
		}
	})
	$(".select-item").on("click", function() {
        var e = $(this).html(),
            o = $(this).closest("ul").attr("data-select"),
            i = $(o);
        $(this).closest(".drop-down").find(i).html(e)
    })
});

$(document).ready(function(){
	 $('#pictures-demo').slippry(
		defaults = {
			transition: 'vertical',
			useCSS: true,
			speed: 5000,
			pause: 2000,
			initSingle: false,
			auto: false,
			preload: 'visible',
			pager: true,
		}   
	)
});


$(document).ready(function(){
   $('.slick-meat').slick({
      autoplay:true,
      dots: false,
      infinite: false,
      speed: 1000,
      slidesToShow: 4,
      slidesToScroll: 2,
      cssEase: 'ease-in',
      arrows: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            cssEase: 'ease-in',
            slidesToShow: 3,
            slidesToScroll: 2,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 1023,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
  })
});


$(document).ready(function(){
   $('.slick-vegetables').slick({
      autoplay:true,
      dots: false,
      infinite: false,
      speed: 1000,
      slidesToShow: 4,
      slidesToScroll: 2,
      cssEase: 'ease-in',
      arrows: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            cssEase: 'ease-in',
            slidesToShow: 3,
            slidesToScroll: 2,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 1023,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
  })
});


$(document).ready(function(){
   $('.slick-cereals').slick({
      autoplay:true,
      dots: false,
      infinite: false,
      speed: 1000,
      slidesToShow: 4,
      slidesToScroll: 2,
      cssEase: 'ease-in',
      arrows: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            cssEase: 'ease-in',
            slidesToShow: 3,
            slidesToScroll: 2,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 1023,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
  })
});

// FANCY BOX

$(document).ready(function() {
  $(".various").fancybox({
    maxWidth  : '100%',
    maxHeight : 1000,
    fitToView : true,
    width   : '90%',
    height    : '85%',
    autoSize  : true,
    closeClick  : false,
    openEffect  : 'elastic',
    closeEffect : 'none'
  });
});


$(document).ready(function() {
  $(".humburger, .close_menu").on("click", function(){
      windowWidth < 992 && (
          $('.menu').toggleClass('show_menu'),
          $(".humburger").toggleClass("active_humburger"),
          $(".to-menu").next("ul").removeClass("show_iner_menu"), 
          $(".categories-bottom").toggleClass("overlay")
      )
  }),
  $(".to-menu").on("click", function() {
      windowWidth < 992 && (
          $(this).next("ul").toggleClass("show_iner_menu"), 
          $(".menu").toggleClass("overflow")
      )
  }), 
  $(".back").on("click", function() {
      windowWidth < 992 && 
      $(this).parent().removeClass("show_iner_menu")
  }),
  $(document).on("mouseup", function(e) {
      var o = $(".menu");
      o.is(e.target) || 0 !== o.has(e.target).length || (
          $(".menu").removeClass("show_menu"), 
          $(".humburger").removeClass("active_humburger"), 
          $(".to-menu").next("ul").removeClass("show_iner_menu"), 
          $(".categories-bottom").removeClass("overlay"))
    })
})

$(document).ready(function() {
    $('.button-social, .social ul li div').on("click", function () {
        $('.social ul').toggleClass("after");
        $('.button-social').toggleClass("before");
    })
});

$(document).ready(function($) {
  $(".decrement").on("click", function() {
        var e = $(this).closest(".counter").find(".count"),
            o = e.val();
        if (o > 0.5) {
            e.val(o = +o - 0.5);
        }
        else{
            e.val(o = 0.5);
        }
    }), 
  $(".increment").on("click", function() {
        var e = $(this).closest(".counter").find(".count"),
            o = e.val();
        var f = $('.indicator-count').text();
        e.val(o = +o + 0.5);
  })
});


//
// Add to cart
//

$(document).ready(function($) {
    var count = 0;
    $('.add-to-cart').on("click", function () {
        count += 1;
        $('.indicator-count').html(count);
    })
});





$(document).ready(function() {
//
// Choose Map 
//

  $('#basic').on("click", function() {
      $('.map-basic').addClass('active');
      
      $('.map-sat').removeClass('active');
  })

  $('#sat').on("click", function() {
      $('.map-sat').addClass('active');
      $('.map-basic').removeClass('active');
  })
})


$(document).ready(function($) {

//
//  Scroll top form Footer
//  

    $(".f-categories ul li:first-child a").click(function() {
        event.preventDefault();
        $('html').animate({
           scrollTop: $("#products-news").offset().top }, 2000);
        $(".nav-tabs li:nth-child(2) a").removeClass('active');
        $(".tab-content .tab-pane:nth-child(2)").removeClass('active');
        $(".nav-tabs li:nth-child(1) a").addClass('active show');
        $(".tab-content .tab-pane:nth-child(1)").addClass('active show')
        $(".nav-tabs li:nth-child(3) a").removeClass('active');
        $(".tab-content .tab-pane:nth-child(3)").removeClass('active');
    })
    $(".f-categories ul li:nth-child(2) a").click(function() {
        event.preventDefault();
        $('html').animate({
           scrollTop: $("#products-news").offset().top }, 2000);
        $(".nav-tabs li:nth-child(1) a").removeClass('active');
        $(".tab-content .tab-pane:nth-child(1)").removeClass('active');
        $(".nav-tabs li:nth-child(2) a").addClass('active show');
        $(".tab-content .tab-pane:nth-child(2)").addClass('active show')
        $(".nav-tabs li:nth-child(3) a").removeClass('active');
        $(".tab-content .tab-pane:nth-child(3)").removeClass('active');
    })
    $(".f-categories ul li:nth-child(3) a").click(function() {
        event.preventDefault();
        $('html').animate({
           scrollTop: $("#products-news").offset().top }, 2000);
        $(".nav-tabs li:nth-child(1) a").removeClass('active');
        $(".tab-content .tab-pane:nth-child(1)").removeClass('active');
        $(".nav-tabs li:nth-child(3) a").addClass('active show');
        $(".tab-content .tab-pane:nth-child(3)").addClass('active show')
        $(".nav-tabs li:nth-child(2) a").removeClass('active');
        $(".tab-content .tab-pane:nth-child(2)").removeClass('active');
    })


    $(".f-categories ul li:nth-child(4) a").click(function() {
        event.preventDefault();
        $('html').animate({
           scrollTop: $("#products-meat").offset().top }, 2000);
    })
    $(".f-categories ul li:nth-child(5) a").click(function() {
        event.preventDefault();
        $('html').animate({
           scrollTop: $("#products-vegetables").offset().top }, 1000);
    })
    $(".f-categories ul li:nth-child(6) a").click(function() {
        event.preventDefault();
        $('html').animate({
           scrollTop: $("#products-cereals").offset().top }, 100);
    })
});

/*
 *
 * Cart 
 * 
 */
// $(document).ready(function($) {
//   $(".delete-cart-product").on("click", function() {
//       $(this).closest(".order-cart").remove()
//   })
// });



$(document).ready(function($) {
  $(".decrement-weight").click(function() {
      var e = $(this).closest(".counter-weight").find(".count-weight"),
          o = e.val();
      if (o > 0.5) {
          e.val(o = +o - 0.5);
      }
      else {
         e.val(o = 0.5);
      }
      var parent = $(this).closest('.info-cart');
      var children = parent.find('.cart-price-last');
      var price = parent.find('.input_price').val();
      var total = price * o;
      // console.log(price + ',' + o );
      children.html('<span>'+total+'</span> <small>vnđ</small>');
  }), 
  $(".increment-weight").click(function(e) {
      var e = $(this).closest(".counter-weight").find(".count-weight"),
          o = e.val();
      e.val(o = +o + 0.5);
      var parent = $(this).closest('.info-cart');
      var children = parent.find('.cart-price-last');
      var price = parent.find('.input_price').val();
      var total = price * o;
      // console.log(price + ',' + o );
      children.html('<span>'+total+'</span> <small>vnđ</small>');
      
  })

  $(".update-cart").click(function() {
      var array_total = $('.wrapper-cart').find('.cart-price-last span');
      var array_sanpham = $('.wrapper-cart').find('.ID_SP');
      var array_soluong = $('.wrapper-cart').find('.count-weight');
      var $data = [];
      var total = 0;
      console.log(array_sanpham,array_soluong)
      for(var i = 0; i < array_total.length; i++){
        total+= parseInt(array_total.eq(i).text());
        $.ajax({
          type:'GET',
          url:'./api/cart/'+array_sanpham.eq(i).val()+'/'+array_soluong.eq(i).val(),
          data: $data,
          success:function(data) {
             console.log(data);
             //location.reload();
          }
      });
        var value = {
          'ID_SP': array_sanpham.eq(i).val(),
          'SOLUONG': array_soluong.eq(i).val()  
        };
        $data.push(value);
        
        
       // console.log(array_sanpham.eq(i).val());
      }
      //console.log($data);
      
      //console.log(data);
      $('.subtotals-count').html('$ '+ total);

      var totals = parseInt($('.total-form').find('input:checked').val()),
          success_total = totals + total;
      $('.subtotals-count-child').html('$ ' + success_total);


  });
});


$(document).ready(function() {
    $("#popup-signin").click(function() {
        $('.form-wrap').addClass("form-right"),
        $('.form-wrap').removeClass("form-left"),
        $(".register").addClass("form-hidden")
    }),
    $("#popup-register").click(function() {
        $('.form-wrap').addClass("form-left"),
        $('.form-wrap').removeClass("form-right"),
        $(".register").removeClass("form-hidden")
    }),
    $(".to-signin-thumb").click(function() {
        $("#form-wrap").removeClass("form-left"), 
        $("#form-wrap").addClass("form-right"),
        $(".register").addClass("form-hidden")
    }),  
    $(".to-register-thumb").click(function() {
        $(".register").removeClass("form-hidden"),
        $("#form-wrap").removeClass("form-right"), 
        $("#form-wrap").addClass("form-left")
    })
    $("#forgot .back-signin").click(function() {
        $('#forgot').modal('hide');
        $("#form-wrap").addClass("form-right");
        $(".register").addClass("form-hidden")
    })
    $(".back-forgot").click(function() {
        $("#signin").modal('hide');
    })
    
});


$('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');

  $({ countNum: $this.text()}).animate(
    {
      countNum: countTo
    },
    {
      duration: 3000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum)) ;
      },
      complete: function() {
        var a = $this.text(this.countNum);
      }
    });  
});