<?php

namespace Webagil\Heroicons;

final class Heroicons
{
    public const STYLE_SOLID = 'solid';
    public const STYLE_OUTLINE = 'outline';
    public const STYLE_MINI = 'mini';
    public const STYLE_MICRO = 'micro';

    public static function get($icon, $style = self::STYLE_SOLID): string
    {
        self::validateStyle($style);

        $iconPath = sprintf('%s/%s/%s.svg', realpath(__DIR__.'/../resources/heroicons'), $style, $icon);

        if (!is_readable($iconPath)) {
            throw new \LogicException(sprintf('Heroicon "%s" in style "%s" cannot be found or is not readable.', $icon, $style));
        }

        return file_get_contents($iconPath);
    }

    private static function validateStyle($style): void
    {
        if (!in_array($style, [self::STYLE_SOLID, self::STYLE_OUTLINE, self::STYLE_MINI, self::STYLE_MICRO])) {
            throw new \LogicException(sprintf('Heroicons style "%s" is not available.', $style));
        }
    }
}
