<?php

return[

	/*
	|--------------------------------------------------------------------------
	| Copyscape Config
	|--------------------------------------------------------------------------
    */
    
    'username' => env('COPYSCAPE_USER',''),
    'key' =>  env('COPYSCAPE_KEY',''),
    'ssl' => env('COPYSCAPE_SSL',true),
    'debug' => env('APP_DEBUG',true)
];