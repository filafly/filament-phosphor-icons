# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Filament Phosphor Icons package that provides Phosphor icon integration for Filament 3.x/4.x applications. It extends the `filafly/filament-icons` base package to provide Phosphor-specific icon mappings and styling options.

## Common Development Commands

### Code Quality
- **Lint PHP code**: `vendor/bin/pint` (uses Laravel Pint for code formatting)
- **Install dependencies**: `composer install`

### Package Development
This is a Composer package meant to be installed in Laravel/Filament applications. Test integration by requiring it in a test Filament project.

## Architecture

### Core Structure
- **PhosphorIcons.php**: Main plugin class extending `IconSet` from the base `filafly/filament-icons` package
- **Enums/Phosphor.php**: Large enum containing all available Phosphor icon constants (492KB+ file)
- **Enums/PhosphorStyle.php**: Enum defining available icon styles (Regular, Bold, Duotone, Fill, Light, Thin)

### Key Components

#### PhosphorIcons Class (`src/PhosphorIcons.php`)
- Extends `Filafly\Icons\IconSet` 
- Contains comprehensive `iconMap` array mapping Filament's internal icon aliases to Phosphor enum cases
- Uses enum-driven approach with `iconPrefix` set to 'phosphor'
- Supports style transformation through the new `style()` method and dynamic style methods (e.g., `->bold()`, `->thin()`)
- Supports icon/alias overrides through `overrideAlias()`, `overrideAliases()`, `overrideIcon()`, and `overrideIcons()` methods

#### Icon Mapping System
The `iconMap` covers all major Filament UI areas:
- Panel navigation and UI elements
- Form components (builder, repeater, file upload, etc.)
- Table components (actions, filters, columns)
- Notifications
- Actions (CRUD operations)
- Infolists and badges

#### Style System
Icons support 6 styles via the `PhosphorStyle` enum that implements the `StyleEnum` contract:
- Regular (default, empty string suffix, `Regular` enum suffix)
- Bold (`-bold` blade suffix, `Bold` enum suffix)
- Duotone (`-duotone` blade suffix, `Duotone` enum suffix) 
- Fill (`-fill` blade suffix, `Fill` enum suffix)
- Light (`-light` blade suffix, `Light` enum suffix)
- Thin (`-thin` blade suffix, `Thin` enum suffix)

The enum-driven approach allows for:
- Dynamic style methods: `->bold()`, `->thin()`, etc.
- Type-safe style transformations
- Automatic icon case resolution with style suffixes

### Dependencies
- **filafly/filament-icons**: Base icon system (local development dependency)
- **codeat3/blade-phosphor-icons**: Provides actual Phosphor icon Blade components
- **filament/filament**: Target framework (v4.0+)

## Development Notes

- The `Phosphor.php` enum file is extremely large (492KB+) - use `Read` with offset/limit or `Grep` to examine specific portions
- Package uses local path dependency for `filafly/filament-icons` development
- No test suite currently configured
- Uses Laravel Pint for PHP code formatting