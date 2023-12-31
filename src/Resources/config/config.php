<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Webagil\Heroicons\Twig\HeroiconsExtension;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->set('twig.extension.webagil_heroicons', HeroiconsExtension::class)
        ->tag('twig.extension');
};
