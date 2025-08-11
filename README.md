<p class="filament-hidden" align="center">
    <img src="https://filafly.com/images/filafly-filament-phosphor-icons.png" alt="Banner" style="width: 100%; max-width: 800px;" />
</p>

# Filament Phosphor Icons

An Phosphor icon set implementation for [Filament Icons](https://github.com/filafly/filament-icons), allowing for instant replacement of all icons used within the Filament framework.

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
        ->plugin(PhosphorIcons::make());
}
```

## Setting the global icon style

Phosphor icons come in multiple styles that you can switch between. Available styles include:

- Regular (default)
- Thin
- Light
- Bold
- Fill
- Duotone

You can change the style using the following methods:

```php
PhosphorIcons::make()->thin();
PhosphorIcons::make()->light();
PhosphorIcons::make()->regular();
PhosphorIcons::make()->bold();
PhosphorIcons::make()->fill();
PhosphorIcons::make()->duotone();
```

## Setting style for a subset of icons

If you need to override certain icons to use a different style, you can use either icon aliases or icon enum cases.

### Using icon aliases
Use the `overrideStyleForAlias` method with a [Filament Icon Alias](https://filamentphp.com/docs/4.x/styling/icons#available-icon-aliases). This method works with either a single icon key (string) or multiple icon keys (array).

```php
use Filafly\Icons\Phosphor\PhosphorIcons;
use Filafly\Icons\Phosphor\Enums\PhosphorStyle;
use Filament\Tables\View\TablesIconAlias;
use Filament\Actions\View\ActionsIconAlias;

// Override a single icon key
PhosphorIcons::make()->overrideStyleForAlias(TablesIconAlias::ACTIONS_FILTER, PhosphorStyle::Solid);

// Override multiple icon keys at once
PhosphorIcons::make()->overrideStyleForAlias([
    TablesIconAlias::ACTIONS_FILTER,
    ActionsIconAlias::DELETE_ACTION,
], PhosphorStyle::Solid);
```

### Using icon enum cases
Use the `overrideStyleForIcon` method with Phosphor enum case(s). Like the alias method, this works with either a single case or an array of cases.

```php
use Filafly\Icons\Phosphor\PhosphorIcons;
use Filafly\Icons\Phosphor\Enums\Phosphor;
use Filafly\Icons\Phosphor\Enums\PhosphorStyle;

// Override a single icon
PhosphorIcons::make()->overrideStyleForIcon(Phosphor::User, PhosphorStyle::Solid);

// Override multiple icons at once
PhosphorIcons::make()->overrideStyleForIcon([
    Phosphor::MagnifyingGlass,
    Phosphor::Funnel,
], PhosphorStyle::Solid);
```

## Specifying exact icons to use

You can also specify exactly which icon you would like to use in given situations. This can be done via icon aliases or icon enum cases.

### Override icon aliases

Use `overrideAlias()` to change which icon is used for specific Filament icon aliases:

```php
use Filafly\Icons\Phosphor\PhosphorIcons;
use Filafly\Icons\Phosphor\Enums\Phosphor;
use Filament\View\PanelsIconAlias;
use Filament\Tables\View\TablesIconAlias;

PhosphorIcons::make()
    ->overrideAlias(PanelsIconAlias::SIDEBAR_EXPAND_BUTTON, Phosphor::CaretRight)
    ->overrideAlias(TablesIconAlias::ACTIONS_FILTER, Phosphor::Funnel);
```

Or use `overrideAliases()` to override multiple aliases at once by passing an array:

```php
use Filafly\Icons\Phosphor\PhosphorIcons;
use Filafly\Icons\Phosphor\Enums\Phosphor;
use Filament\View\PanelsIconAlias;
use Filament\Tables\View\TablesIconAlias;

PhosphorIcons::make()
    ->overrideAliases([
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => Phosphor::CaretRight,
        TablesIconAlias::ACTIONS_FILTER => Phosphor::Funnel,
    ]);
```

### Override individual icons

Use `overrideIcon()` to replace specific Phosphor icons with different ones:

```php
use Filafly\Icons\Phosphor\PhosphorIcons;
use Filafly\Icons\Phosphor\Enums\Phosphor;

PhosphorIcons::make()
    ->overrideIcon(Phosphor::MagnifyingGlass, Phosphor::MagnifyingGlassThin)
    ->overrideIcon(Phosphor::Plus, Phosphor::PlusCircle);
```

Or use `overrideIcons()` to override multiple icons at once by passing an array:

```php
use Filafly\Icons\Phosphor\PhosphorIcons;
use Filafly\Icons\Phosphor\Enums\Phosphor;

PhosphorIcons::make()
    ->overrideIcons([
        Phosphor::MagnifyingGlass->value => Phosphor::MagnifyingGlassThin,
        Phosphor::Plus->value => Phosphor::PlusCircle,
        Phosphor::Edit->value => Phosphor::EditPencil,
    ]);
```
> PHP arrays do not support enums as keys so `->value` is necessary if you want to reference the enum

These methods are useful for fine-tuning the icon set to better fit your application's needs.

## Icon enum
All icons are available through an enum providing convenient usage throughout Filament. For more information, check the [Filament docs](https://filamentphp.com/docs/4.x/styling/icons).

```php
use Filament\Forms\Components\Toggle;
use Filafly\Icons\Phosphor\Enums\Phosphor;

Toggle::make('is_starred')
    ->onIcon(Phosphor::Star)
```

## License
The MIT License (MIT). Please see [License](LICENSE.md) for more information.