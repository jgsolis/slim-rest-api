<?php

$this->app->group('', function(){ new \App\Controllers\IndexController($this); });

//$this->app->group('/api/user', function(){ new \App\Controllers\UserController($this); });


?>