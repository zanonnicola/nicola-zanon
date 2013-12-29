/**
 * jQuery-Plugin "preloadCssImages"
 * by Scott Jehl, scott@filamentgroup.com
 * http://www.filamentgroup.com
 * reference article: http://www.filamentgroup.com/lab/update_automatically_preload_images_from_css_with_jquery/
 * demo page: http://www.filamentgroup.com/examples/preloadImages/index_v2.php
 * 
 * Copyright (c) 2008 Filament Group, Inc
 * Dual licensed under the MIT (filamentgroup.com/examples/mit-license.txt) and GPL (filamentgroup.com/examples/gpl-license.txt) licenses.
 *
 * Version: 5.0, 10.31.2008
 * Changelog:
 *  02.20.2008 initial Version 1.0
 *    06.04.2008 Version 2.0 : removed need for any passed arguments. Images load from any and all directories.
 *    06.21.2008 Version 3.0 : Added options for loading status. Fixed IE abs image path bug (thanks Sam Pohlenz).
 *    07.24.2008 Version 4.0 : Added support for @imported CSS (credit: http://marcarea.com/). Fixed support in Opera as well. 
 *    10.31.2008 Version: 5.0 : Many feature and performance enhancements from trixta
 * --------------------------------------------------------------------
 */

jQuery.preloadCssImages = function(settings){
  settings = jQuery.extend({
    statusTextEl: null,
    statusBarEl: null,
    errorDelay: 999, // handles 404-Errors in IE
    simultaneousCacheLoading: 2
  }, settings);
  var allImgs = [],
    loaded = 0,
    imgUrls = [],
    thisSheetRules, 
    errorTimer;
  
  function onImgComplete(){
    clearTimeout(errorTimer);
    if (imgUrls && imgUrls.length && imgUrls[loaded]) {
      loaded++;
      if (settings.statusTextEl) {
        var nowloading = (imgUrls[loaded]) ? 
          'Now Loading: <span>' + imgUrls[loaded].split('/')[imgUrls[loaded].split('/').length - 1] : 
          'Loading complete'; // wrong status-text bug fixed
        jQuery(settings.statusTextEl).html('<span class="numLoaded">' + loaded + '</span> of <span class="numTotal">' + imgUrls.length + '</span> loaded (<span class="percentLoaded">' + (loaded / imgUrls.length * 100).toFixed(0) + '%</span>) <span class="currentImg">' + nowloading + '</span></span>');
      }
      if (settings.statusBarEl) {
        var barWidth = jQuery(settings.statusBarEl).width();
        jQuery(settings.statusBarEl).css('background-position', -(barWidth - (barWidth * loaded / imgUrls.length).toFixed(0)) + 'px 50%');
      }
      loadImgs();
    }
  }
  
  function loadImgs(){
    //only load 1 image at the same time / most browsers can only handle 2 http requests, 1 should remain for user-interaction (Ajax, other images, normal page requests...)
    // otherwise set simultaneousCacheLoading to a higher number for simultaneous downloads
    if(imgUrls && imgUrls.length && imgUrls[loaded]){
      var img = new Image(); //new img obj
      img.src = imgUrls[loaded];  //set src either absolute or rel to css dir
      if(!img.complete){
        jQuery(img).bind('error load onreadystatechange', onImgComplete);
      } else {
        onImgComplete();
      }
      errorTimer = setTimeout(onImgComplete, settings.errorDelay); // handles 404-Errors in IE
    }
  }
  
  function parseCSS(sheets, urls) {
    var w3cImport = false,
      imported = [],
      importedSrc = [],
      baseURL;
    var sheetIndex = sheets.length;
    while(sheetIndex--){//loop through each stylesheet
      
      var cssPile = '';//create large string of all css rules in sheet
      
      if(urls && urls[sheetIndex]){
        baseURL = urls[sheetIndex];
      } else {
        var csshref = (sheets[sheetIndex].href) ? sheets[sheetIndex].href : 'window.location.href';
        var baseURLarr = csshref.split('/');//split href at / to make array
        baseURLarr.pop();//remove file path from baseURL array
        baseURL = baseURLarr.join('/');//create base url for the images in this sheet (css file's dir)
        if (baseURL) {
          baseURL += '/'; //tack on a / if needed
        }
      }
      if(sheets[sheetIndex].cssRules || sheets[sheetIndex].rules){
        thisSheetRules = (sheets[sheetIndex].cssRules) ? //->>> http://www.quirksmode.org/dom/w3c_css.html
          sheets[sheetIndex].cssRules : //w3
          sheets[sheetIndex].rules; //ie 
        var ruleIndex = thisSheetRules.length;
        while(ruleIndex--){
          if(thisSheetRules[ruleIndex].style && thisSheetRules[ruleIndex].style.cssText){
            var text = thisSheetRules[ruleIndex].style.cssText;
            if(text.toLowerCase().indexOf('url') != -1){ // only add rules to the string if you can assume, to find an image, speed improvement
              cssPile += text; // thisSheetRules[ruleIndex].style.cssText instead of thisSheetRules[ruleIndex].cssText is a huge speed improvement
            }
          } else if(thisSheetRules[ruleIndex].styleSheet) {
            imported.push(thisSheetRules[ruleIndex].styleSheet);
            w3cImport = true;
          }
          
        }
      }
      //parse cssPile for image urls
      var tmpImage = cssPile.match(/[^\("]+\.(gif|jpg|jpeg|png)/g);//reg ex to get a string of between a "(" and a ".filename" / '"' for opera-bugfix
      if(tmpImage){
        var i = tmpImage.length;
        while(i--){ // handle baseUrl here for multiple stylesheets in different folders bug
          var imgSrc = (tmpImage[i].charAt(0) == '/' || tmpImage[i].match('://')) ? // protocol-bug fixed
            tmpImage[i] : 
            baseURL + tmpImage[i];
          
          if(jQuery.inArray(imgSrc, imgUrls) == -1){
            imgUrls.push(imgSrc);
          }
        }
      }
      
      if(!w3cImport && sheets[sheetIndex].imports && sheets[sheetIndex].imports.length) {
        for(var iImport = 0, importLen = sheets[sheetIndex].imports.length; iImport < importLen; iImport++){
          var iHref = sheets[sheetIndex].imports[iImport].href;
          iHref = iHref.split('/');
          iHref.pop();
          iHref = iHref.join('/');
          if (iHref) {
            iHref += '/'; //tack on a / if needed
          }
          var iSrc = (iHref.charAt(0) == '/' || iHref.match('://')) ? // protocol-bug fixed
            iHref : 
            baseURL + iHref;
          
          importedSrc.push(iSrc);
          imported.push(sheets[sheetIndex].imports[iImport]);
        }
        
        
      }
    }//loop
    if(imported.length){
      parseCSS(imported, importedSrc);
      return false;
    }
    var downloads = settings.simultaneousCacheLoading;
    while( downloads--){
      setTimeout(loadImgs, downloads);
    }
  }
  parseCSS(document.styleSheets);
  return imgUrls;
};

(function($) {

var $event = $.event,
$special,
resizeTimeout;

$special = $event.special.debouncedresize = {
setup: function() {
$( this ).on( "resize", $special.handler );
},
teardown: function() {
$( this ).off( "resize", $special.handler );
},
handler: function( event, execAsap ) {
// Save the context
var context = this,
args = arguments,
dispatch = function() {
// set correct event type
event.type = "debouncedresize";
$event.dispatch.apply( context, args );
};

if ( resizeTimeout ) {
clearTimeout( resizeTimeout );
}

execAsap ?
dispatch() :
resizeTimeout = setTimeout( dispatch, $special.threshold );
},
threshold: 150
};

})(jQuery);

/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */
window.matchMedia=window.matchMedia||(function(e,f){var c,a=e.documentElement,b=a.firstElementChild||a.firstChild,d=e.createElement("body"),g=e.createElement("div");g.id="mq-test-1";g.style.cssText="position:absolute;top:-100em";d.appendChild(g);return function(h){g.innerHTML='&shy;<style media="'+h+'"> #mq-test-1 { width: 42px; }</style>';a.insertBefore(d,b);c=g.offsetWidth==42;a.removeChild(d);return{matches:c,media:h}}})(document);


/*! Picturefill - Responsive Images that work today. (and mimic the proposed Picture element with span elements). Author: Scott Jehl, Filament Group, 2012 | License: MIT/GPLv2 */

(function( w ){

  // Enable strict mode
  "use strict";

  w.picturefill = function() {
    var ps = w.document.getElementsByTagName( "div" );

    // Loop the pictures
    for( var i = 0, il = ps.length; i < il; i++ ){
      if( ps[ i ].getAttribute( "data-picture" ) !== null ){

        var sources = ps[ i ].getElementsByTagName( "div" ),
          matches = [];

        // See if which sources match
        for( var j = 0, jl = sources.length; j < jl; j++ ){
          var media = sources[ j ].getAttribute( "data-media" );
          // if there's no media specified, OR w.matchMedia is supported 
          if( !media || ( w.matchMedia && w.matchMedia( media ).matches ) ){
            matches.push( sources[ j ] );
          }
        }

      // Find any existing img element in the picture element
      var picImg = ps[ i ].getElementsByTagName( "img" )[ 0 ];

      if( matches.length ){
        var matchedEl = matches.pop();
        if( !picImg ){
          picImg = w.document.createElement( "img" );
          picImg.alt = ps[ i ].getAttribute( "data-alt" );
        }

        picImg.src =  matchedEl.getAttribute( "data-src" );
        matchedEl.appendChild( picImg );
      }
      else if( picImg ){
        picImg.parentNode.removeChild( picImg );
      }
    }
    }
  };

  // Run on resize and domready (w.load as a fallback)
  if( w.addEventListener ){
    w.addEventListener( "resize", w.picturefill, false );
    w.addEventListener( "DOMContentLoaded", function(){
      w.picturefill();
      // Run once only
      w.removeEventListener( "load", w.picturefill, false );
    }, false );
    w.addEventListener( "load", w.picturefill, false );
  }
  else if( w.attachEvent ){
    w.attachEvent( "onload", w.picturefill );
  }

}( this ));


/*!
 * enquire.js v2.1.0 - Awesome Media Queries in JavaScript
 * Copyright (c) 2013 Nick Williams - http://wicky.nillia.ms/enquire.js
 * License: MIT (http://www.opensource.org/licenses/mit-license.php)
 */

(function(t,i,n){var e=i.matchMedia;"undefined"!=typeof module&&module.exports?module.exports=n(e):"function"==typeof define&&define.amd?define(function(){return i[t]=n(e)}):i[t]=n(e)})("enquire",this,function(t){"use strict";function i(t,i){var n,e=0,s=t.length;for(e;s>e&&(n=i(t[e],e),n!==!1);e++);}function n(t){return"[object Array]"===Object.prototype.toString.apply(t)}function e(t){return"function"==typeof t}function s(t){this.options=t,!t.deferSetup&&this.setup()}function o(i,n){this.query=i,this.isUnconditional=n,this.handlers=[],this.mql=t(i);var e=this;this.listener=function(t){e.mql=t,e.assess()},this.mql.addListener(this.listener)}function r(){if(!t)throw Error("matchMedia not present, legacy browsers require a polyfill");this.queries={},this.browserIsIncapable=!t("only all").matches}return s.prototype={setup:function(){this.options.setup&&this.options.setup(),this.initialised=!0},on:function(){!this.initialised&&this.setup(),this.options.match&&this.options.match()},off:function(){this.options.unmatch&&this.options.unmatch()},destroy:function(){this.options.destroy?this.options.destroy():this.off()},equals:function(t){return this.options===t||this.options.match===t}},o.prototype={addHandler:function(t){var i=new s(t);this.handlers.push(i),this.matches()&&i.on()},removeHandler:function(t){var n=this.handlers;i(n,function(i,e){return i.equals(t)?(i.destroy(),!n.splice(e,1)):void 0})},matches:function(){return this.mql.matches||this.isUnconditional},clear:function(){i(this.handlers,function(t){t.destroy()}),this.mql.removeListener(this.listener),this.handlers.length=0},assess:function(){var t=this.matches()?"on":"off";i(this.handlers,function(i){i[t]()})}},r.prototype={register:function(t,s,r){var h=this.queries,u=r&&this.browserIsIncapable;return h[t]||(h[t]=new o(t,u)),e(s)&&(s={match:s}),n(s)||(s=[s]),i(s,function(i){h[t].addHandler(i)}),this},unregister:function(t,i){var n=this.queries[t];return n&&(i?n.removeHandler(i):(n.clear(),delete this.queries[t])),this}},new r});