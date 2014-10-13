/* requirejs.config({
    //By default load any module IDs from js/lib
    baseUrl: 'js/lib',
    //except, if the module ID starts with "app",
    //load it from the js/app directory. paths
    //config is relative to the baseUrl, and
    //never includes a ".js" extension since
    //the paths config could be for a directory.
    paths: {
        app: '../app'
    }
});

// Start the main app logic.
requirejs(['jquery', 'canvas', 'app/sub'],
function   ($,        canvas,   sub) {
    //jQuery, canvas and the app/sub module are all
    //loaded and can be used here now.
}); */

requirejs(['vendor/modernizr.custom.2.7.1', 'vendor/ssm'],
	function($, ssm) {


		require(['ssm-header'], function(ssm-header) {

		});


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

/**
* Loads a JS file from the supplied URL
* @param  {String} url     The URL of the JS file, if its relative it will be to the current page's url
* @return {HTMLElement}    The <link> which was appended to the <head>
*/

function loadjs(url) {
    var $ = document;
    var head = $.getElementsByTagName('head')[0],
    link = $.createElement('script');
    link.src = url;
    link.async = 'async';
    link.href = url;
    head.appendChild(link);
    //return link;
}