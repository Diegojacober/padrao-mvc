<?php 
namespace App;
//parao autoload funcionar

use MF\Init\Bootstrap;
class Route extends Bootstrap{

   protected function initRoutes()
    {
        $routes['home'] = array(
            'route' => '/',
            'controller'=>'indexController',
            'action' => 'index'
        );
        $this->setRoutes($routes);
    }

    
}

?>