<?php

function createRoute($resources) {

	foreach($resources as $route => $controller) {
		Route::resource($route, $controller);
	}
}

Route::group(['prefix' => 'test', 'namespace' => 'Test'], function() {

	createRoute([
		'bears' => 'BearController'
	]);
});
