require.config({
	"baseUrl": "/wp-content/themes/hekima/js",
	"paths": {
		"jquery": "../js/vendor/jquery/jquery"
	}
});

require(['jquery'], function($) {
	console.log('Working!!');
});
