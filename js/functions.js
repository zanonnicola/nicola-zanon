jQuery.cachedScript = function( url, options ) {
 
  // Allow user to set any option except for dataType, cache, and url
  options = $.extend( options || {}, {
    dataType: "script",
    cache: true,
    url: url
  });
 
  // Use $.ajax() since it is more flexible than $.getScript
  // Return the jqXHR object so we can chain callbacks
  return jQuery.ajax( options );
};

SITE = {
  init: function() {
    SITE.features.init();
  }
};


SITE.features = {
  common: {
    init: function() {

      var showMenu = function() {
        $("body").toggleClass("active-nav");      
        $("#menu-button").toggleClass("active-button"); 
      };

      // Toggle for nav menu
      $("#menu-button").click(function(e) {
        e.preventDefault();
        showMenu();             
      });

      if (Modernizr.svg == false) {
        var imgs = document.getElementsByTagName('img');
        var dotSVG = /.*\.svg$/;
        for (var i = 0; i != imgs.length; ++i) {
          if(imgs[i].src.match(dotSVG)) {
            imgs[i].src = imgs[i].src.slice(0, -3) + "png";
          }
        }
      };
      
      var link = $("a[rel='external']");
      link.attr("target", "_blank");
    } // END init
  }, // END common
 
  homeFunctions: {
    init: function() {

      $(".button").addClass('animated fadeIn');

      // MODAL HIRE ME
      var modal = $(".modal");

      $("#hireme").on("click", function(e) {
        e.preventDefault();
        modal.fadeIn();
        $("body").css("overflow", "hidden");
      });
      $("#close").on("click", function() {
        modal.fadeOut();
        $("body").css("overflow", "auto");
      });

      $.cachedScript( "plugins/owl.carousel.min.js" ).done(function() {
        $("#owl-example").owlCarousel({
          items : 2,
          lazyLoad : true,
          itemsDesktop: false
        });
      });
      $("#loadContent").load("tools.html #content > *");

    } // END init
  },

  portfolioFunctions: {
    init: function() {
       
    } // EDn init
  },

  switchElements: {
    init: function() {

      var firstToswitch = $("[data-switch='first']");
      var secondToswitch = $("[data-switch='second']");

      enquire.register("screen and (max-width: 400px)", {
        match : function() {
          firstToswitch.before(secondToswitch);   
        },
        unmatch : function() {
          secondToswitch.before(firstToswitch);
          console.log(state); 
        }
      });  
    }
  },

  form: {
    init: function() {
      if(!Modernizr.placeholder) {
        var formLi = $("#contact-form li");

        formLi.each(function(){
          $(this).addClass("js-hide-label");
        });

        formLi.find("input, textarea").on("keyup blur focus", function(e){
       
          var $this = $(this),
              $parent = $this.parent();
        
          if (e.type == 'keyup') {   
            if( $this.val() == '' ) {
              $parent.addClass('js-hide-label');
            } else {
                $parent.removeClass('js-hide-label');
            }  
          }
          else if (e.type == 'blur') {
            if( $this.val() == '' ) {
                $parent.addClass('js-hide-label');
            }
            else {
                $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
            }
          }
          else if (e.type == 'focus') {
            if( $this.val() !== '' ) {
              $parent.removeClass('js-unhighlight-label');
            }
          }
        });
      };
    } // END init
  },

  hack: {
    init: function() {
      
      // Simple boxsizing polyfill

      if(!($("html").hasClass("boxsizing"))){
        $("*").each(function(){
            if($(this).css("display")=="block"){
                var f, a, n;
                f = $(this).outerWidth();
                a = $(this).width();
                n = a-(f-a);
                $(this).css("width", n);
            }
          });
      };
      // background-size polyfill

      Modernizr.load({
        test: Modernizr.backgroundsize,
          nope: ['js/min/backstretch.min.js', 'js/min/setbs.min.js']
      });

    } // END init
  }, // END hack

  init: function() {
    var features = $('body').data('features');
    var featuresArray = [];
 
    if(features) {
      featuresArray = features.split(' ');
 
      for(var x = 0, length = featuresArray.length; x < length; x++) {
        var func = featuresArray[x];
 
        if(this[func] && typeof this[func].init === 'function') {
          this[func].init();
        }
      }
    }
  } // END init 
};

$(document).ready(SITE.init);
