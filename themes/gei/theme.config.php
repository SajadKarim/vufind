<?php
return array(
    'extends' => 'bootprint3',
    'css' => array(
        //'vendor/bootstrap.min.css',
        //'vendor/bootstrap-accessibility.css',
        //'bootstrap-custom.css',
		'individually.css',
     'compiled.css',
		'vendor/font-awesome.min.css',
        //'vendor/bootstrap-slider.css',
        'print.css:print',
		'edu.css',
        //'vendor/cookieconsent.min.css',
	'vendor/bootstrap-tour-standalone.css',
    ),
    'js' => array(
        'vendor/base64.js:lt IE 10', // btoa polyfill
        'vendor/jquery.min.js',
        'vendor/bootstrap.min.js',
        'vendor/bootstrap-accessibility.min.js',
        //'vendor/bootlint.min.js',
        //'vendor/typeahead.js',
        'vendor/validator.min.js',
        //'vendor/rc4.js',
        'common.js',
        'lightbox.js',
	'vendor/bootstrap-slider.js',
	'vendor/bootstrap-tour-standalone.js',
	'tour-1.js',
    )
);
