var imgArr = new Array( 
	'img/esedra-m.jpg',
	'img/esedra-m1.jpg',
	'img/seo.jpg'
);
 
var preloadArr = new Array();
var i;
 
/* Preload images */
for(i=0; i < imgArr.length; i++){
	preloadArr[i] = new Image();
	preloadArr[i].src = imgArr[i];
}

var currImg = 1;
var intID = setInterval(changeImg, 5000);
 
/* image rotator */
function changeImg() {
	$('#bg').animate({opacity: 0.5}, 1000, function() {
		$(this).css('background','url(' + preloadArr[currImg++%preloadArr.length].src +') center center no-repeat');
	}).animate({opacity: 1}, 1000);
}