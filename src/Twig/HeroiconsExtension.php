<?php

namespace Webagil\Heroicons\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Webagil\Heroicons\Heroicons;

class HeroiconsExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('heroicon', [$this, 'getHeroicon'], ['is_safe' => ['html']]),
        ];
    }

    public function getHeroicon(string $icon, string $class = '', string $style = Heroicons::STYLE_SOLID): string
    {
        $svg = Heroicons::get($icon, $style);
        if (!$class) {
            return $svg;
        }

        return str_replace('<svg', sprintf('<svg class="%s"', $class), $svg);
    }
}
