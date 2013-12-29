
// NOT WORKING IN IE8

var size = window.getComputedStyle(document.body,':before').getPropertyValue('content');

if (size.indexOf("desktop") != -1) {
  var h = height - menu - header - 150;
	$("#header").css("margin-bottom", h);
}	

$(window).on("load debouncedresize", function() {
  if (size.indexOf("desktop") != -1) { 
    $("#portfolio .top-menu").insertBefore( $("#portfolio .right-portfolio > .wrapper") );
    console.log(size);
  }
});
