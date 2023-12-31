<?php

namespace Webagil\Heroicons\Tests\Twig;

use Webagil\Heroicons\Twig\HeroiconsExtension;
use PHPUnit\Framework\TestCase;
use Twig\Environment;
use Twig\Loader\ArrayLoader;

class HeroiconsExtensionTest extends TestCase
{
    public function testGetHeroicon()
    {
        $extension = new HeroiconsExtension();
        $svg = $extension->getHeroicon('academic-cap');

        $this->assertSame(false, strpos($svg, '<svg xmlns'));
    }

    public function testGetHeroiconWithCustomClass()
    {
        $extension = new HeroiconsExtension();
        $svg = $extension->getHeroicon('academic-cap', 'foo bar');

        $this->assertSame(false, strpos($svg, '<svg class="foo bar" xmlns'));
    }

    public function testExtensionIsRegistered()
    {
        $twig = new Environment(new ArrayLoader());
        $twig->addExtension(new HeroiconsExtension());

        $template = $twig->createTemplate('{{ heroicon("academic-cap") }}', 'test');
        $output = $template->render();

        $this->assertSame(false, strpos($output, '<svg xmlns'));
    }
}
