var showMenu = function() {
	$('body').toggleClass("active-nav");			
	$('#menu-button').toggleClass("active-button");	
}

if(!($('html').hasClass('boxsizing'))){
  $('*').each(function(){
    if($(this).css('display')=='block'){
      var f, a, n;
      f = $(this).outerWidth();
      a = $(this).width();
      n = a-(f-a);
      $(this).css('width', n);
    }
  });
}

if (!window.getComputedStyle) {
  window.getComputedStyle = function(el, pseudo) {
    this.el = el;
    this.getPropertyValue = function(prop) {
      var re = /(\-([a-z]){1})/g;
      if (prop == 'float') prop = 'styleFloat';
        if (re.test(prop)) {
          prop = prop.replace(re, function () {
            return arguments[2].toUpperCase();
          });
        }
        return el.currentStyle[prop] ? el.currentStyle[prop] : null;
    }
    return this;
  }
}
// Toggle for nav menu
$('#menu-button').click(function(e) {
	e.preventDefault();
	showMenu();							
});

$(".button").addClass('animated fadeIn');

// Setting the height of the first page
var height = $(window).height();
var menu = $(".top-menu").outerHeight();
var header = $("#header").outerHeight();
var portfolioMenu = $("#portfolio .top-menu");

enquire.register("screen and (min-width: 1025px)", {
  deferSetup : true,
  setup : function() {     
  },
  match : function() {
    var h = height - menu - header - 150;
    $("#header").css("margin-bottom", h);
    portfolioMenu.insertBefore( $("#portfolio .right-portfolio > .wrapper") );     
  },
  unmatch : function() {
  }  
});

Modernizr.load({
  test: Modernizr.backgroundsize,
  nope: ['js/min/backstretch.min.js', 'js/min/setbs.min.js']
});

// MODAL HIRE ME
var modal = $(".modal");

$("#hireme").on("click", function(e) {
  e.preventDefault();
  modal.fadeIn();
  $('body').css("overflow", "hidden");
});
$("#close").on("click", function() {
  modal.fadeOut();
  $("body").css("overflow", "auto");
})

// PORTFOLIO

var title  = $("#title-portfolio"),
    site   = $("#site"),
    button = $("#button"),
    bg     = $("#bg");

$("#pattern").on("click", "a", function(event) {
  event.preventDefault();
  var href = $(this).attr("href");
  var projectTitle = $(this).find("span").text();
  setInfo(href, projectTitle);
  var theClass = $(this).data("class");
  bg.removeClass().addClass("bg-portfolio" + " " + theClass);
});

var setInfo = function(url, name) {
  title.text(name);
  site.text(url.substring(7)).attr("href", url);
  button.attr("href", url);
}
