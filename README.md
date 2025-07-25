<p class="filament-hidden" align="center">
    <img src="images/filafly-filament-phosphor-icons.png" alt="Banner" style="width: 100%; max-width: 800px;" />
</p>

# Filament Phosphor Icons

A Phosphor icon set implementation for Filament 3.x, providing a comprehensive set of Phosphor icons that seamlessly integrate with Filament's interface.

## Installation

You can install the package via composer:

```bash
composer require filafly/filament-phosphor-icons
```

After the package is installed, you must register the plugin in your Filament Panel provider:

```php
use Filafly\Icons\Phosphor\PhosphorIcons;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            PhosphorIcons::make(),
        ]);
}
```

## Icon Styles

Phosphor icons come in multiple styles that you can switch between. Available styles include:

- Regular (default)
- Thin
- Light
- Bold
- Fill
- Duotone

You can change the style using the following methods:

```php
// Set to thin style
PhosphorIcons::make()->thin();

// Set to light style
PhosphorIcons::make()->light();

// Set to regular style (default)
PhosphorIcons::make()->regular();

// Set to bold style
PhosphorIcons::make()->bold();

// Set to fill style
PhosphorIcons::make()->fill();

// Set to duotone style
PhosphorIcons::make()->duotone();
```

## Override Specific Icons
If you need to override certain icons to use different icons or styles, you can use the new enum-driven override methods.

### Using Icon Aliases
Use the `overrideAlias` method with a [Filament Icon Alias](https://filamentphp.com/docs/3.x/support/icons#available-icon-aliases) and a specific Phosphor enum case.

```php
use Filafly\Icons\Phosphor\Enums\Phosphor;

// Override a single icon alias to use a specific icon style
PhosphorIcons::make()->overrideAlias('tables::actions.filter', Phosphor::FunnelBold);

// Override multiple aliases at once
PhosphorIcons::make()->overrideAliases([
    'tables::actions.filter' => Phosphor::FunnelThin,
    'actions::delete-action' => Phosphor::TrashBold,
]);
```

### Using Icon Enum Cases
Use the `overrideIcon` method to replace one Phosphor icon with another across all usages.

```php
use Filafly\Icons\Phosphor\Enums\Phosphor;

// Replace all instances of one icon with another
PhosphorIcons::make()->overrideIcon(Phosphor::User, Phosphor::UserBold);

// Override multiple icons at once
PhosphorIcons::make()->overrideIcons([
    Phosphor::User => Phosphor::UserCircle,
    Phosphor::CaretUp => Phosphor::CaretUpBold,
]);
```

## License
The MIT License (MIT). Please see [License](LICENSE.md) for more information.