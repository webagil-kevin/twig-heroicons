# Twig Heroicons

[![tests](https://github.com/marcw/twig-heroicons/actions/workflows/php.yml/badge.svg)](https://github.com/marcw/twig-heroicons/actions/workflows/php.yml)

This package provides an Heroicons integration for Twig.

## Install

Use composer:

```bash
composer require webagil-kevin/twig-heroicons
```

### Symfony

You do not need to do anything more to use the extension.

### Twig

If you use Twig directly, register the extension before using it:

```php
<?php

use Webagil\Heroicons\Twig\HeroiconsExtension;
use Twig\Environment;

$twig = new Environment(/* ... */);
$twig->addExtension(new HeroiconsExtension());
```

## Usage

This extension provides a `heroicon` function that outputs the icon SVG.

```jinja2
{# function signature #}
{{ heroicon(icon, class, style) }}

{# the default style is 'solid' #}
{{ heroicon('academy-cap') }}

{# use the 'outline' style #}
{{ heroicon('academy-cap', '', 'outline') }}

{# Add a custom class to the SVG #}
{{ heroicon('academy-cap', 'text-green-200', 'outline') }}
```

4 types of icon styles : `solid`, `outline`, `mini` and `micro`.

## License

This library is MIT licensed.

## Acknowledgment

This project is a fork of the [marcw/twig-heroicons](https://github.com/marcw/twig-heroicons) repository.

The purpose for this fork is to update the project and maintain compatibility with the latest version of Symfony and Heroicons. We greatly appreciate the effort and work that went into the original project.

Please refer to the original repository for information on the original project.
