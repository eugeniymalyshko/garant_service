<?php

use garant\Router;

Router::add('^sender',['controller' => 'Sender', 'action' => 'mail']);

Router::add('^place_single/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Places', 'action' => 'view']);

Router::add('^service_single/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'services', 'action' => 'view']);

// default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');