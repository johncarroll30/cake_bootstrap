requirejs.config({
    //enforceDefine: true,
    paths: {
    	async: 'async',
    	ssm: 'vendor/ssm.min',
    	ssmheader: 'ssmheader',
    	ssmfooter: 'ssmfooter',
        jquery: 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min',
        mapsinit: 'maps-init',
        modernizr: 'vendor/modernizr.custom.2.7.1',
        foundation : 'foundation/foundation',
        foundationforms : 'foundation/foundation.forms',
        backstretch : 'vendor/jquery.backstretch.min',
        placeholders: 'vendor/placeholders.min',
        cookiebar: 'vendor/jquery.cookiebar',
        medium : 'medium',
        large : 'large'
    },
    /* Add anything with a dependancy in here */
    shim: {
	    ssmheader: ['ssm'],
	    ssmfooter: ['ssmheader','modernizr'],
	    foundation: ['jquery'],
	    foundationforms: ['foundation'],
        cookiebar: ['jquery'],
	    app: ['ssm','modernizr','jquery','cookiebar'],
  	}
});

requirejs(['ssm','ssmheader','modernizr','jquery','foundation','app','ssmfooter','cookiebar'], function() {

});
define(['async!http://maps.google.com/maps/api/js?sensor=false'], function() {
        window.onload = function () {
    	   requirejs(['mapsinit']);
        }
});


/**
* Loads a CSS file from the supplied URL
* @param  {String} url     The URL of the CSS file, if its relative it will be to the current page's url
* @return {HTMLElement}    The <link> which was appended to the <head>
*/

function loadcss(url) {
	var $ = document;
	var head = $.getElementsByTagName('head')[0],
	link = $.createElement('link');
	link.type = 'text/css';
	link.rel = 'stylesheet';
	link.media = 'all';
	link.async = 'async';
	link.href = url;
	head.appendChild(link);
    //return link;
}
