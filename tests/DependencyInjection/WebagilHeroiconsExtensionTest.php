<?php

namespace Webagil\Heroicons\Tests\DependencyInjection;

use Webagil\Heroicons\DependencyInjection\WebagilHeroiconsExtension;
use Webagil\Heroicons\Twig\HeroiconsExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

class WebagilHeroiconsExtensionTest extends TestCase
{
    public function testLoad()
    {
        $container = new ContainerBuilder(new ParameterBag([
            'kernel.debug' => false,
        ]));
        $container->registerExtension(new WebagilHeroiconsExtension());
        $container->loadFromExtension('webagil_heroicons');
        $container->getCompilerPassConfig()->setOptimizationPasses([]);
        $container->getCompilerPassConfig()->setRemovingPasses([]);
        $container->getCompilerPassConfig()->setAfterRemovingPasses([]);
        $container->compile();

        $this->assertEquals(HeroiconsExtension::class, $container->getDefinition('twig.extension.webagil_heroicons')->getClass());
    }
}
