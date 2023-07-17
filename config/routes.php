<?php

use App\Controller\UsingAttributes;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
    $routes->add('blog_list', '/blog')
        ->controller([UsingAttributes::class, 'list'])
    ;
    
};