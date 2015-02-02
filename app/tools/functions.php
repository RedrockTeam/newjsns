<?php

function haha(){
	echo "hello!";
}

function verify_permission(){
	return Route::currentRouteName();
}