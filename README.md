# filafly/filament-icon-swap-phosphor

A Phosphor icon driver for FilamentIcons core.

## Installation

```bash
composer require filafly/filament-icon-swap-phosphor
```

## Usage

Install the core and this driver:

```bash
composer require filafly/filament-icon-swap filafly/filament-icon-swap-phosphor
```

In your `config/filament-icons.php`, set:

```php
'driver' => env('FILAMENT_ICON_DRIVER', 'phosphor'),
```

(Optional) Override default styles at runtime:

```php
\Filafly\FilamentIconsPhosphor\PhosphorIcon::thin();
```

Icons will swap automatically based on your config key.