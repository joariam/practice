<?php

use Symfony\component\Routing\Route;
use Symfony\component\Routing\RouteCollection;

//route system;
$routes= new RouteCollection;
$routes->add('product', newRoute(constant('URL_SUBFOLDER') . '/product/{id}', array('controller'=>'ProductController', 'method'=>'showAction'), array('id'=> '[0-9]+')));