<?php

namespace Filafly\Icons\Phosphor\Enums;

use Filafly\Icons\Contracts\StyleEnum;

enum PhosphorStyle: string implements StyleEnum
{
    case Regular = '';
    case Bold = '-bold';
    case Duotone = '-duotone';
    case Fill = '-fill';
    case Light = '-light';
    case Thin = '-thin';

    public function getStyleName(): string
    {
        return match ($this) {
            self::Regular => 'regular',
            self::Bold => 'bold',
            self::Duotone => 'duotone',
            self::Fill => 'fill',
            self::Light => 'light',
            self::Thin => 'thin',
        };
    }

    public function getEnumSuffix(): string
    {
        return match ($this) {
            self::Regular => 'Regular',
            self::Bold => 'Bold',
            self::Duotone => 'Duotone',
            self::Fill => 'Fill',
            self::Light => 'Light',
            self::Thin => 'Thin',
        };
    }

    public static function getStyleNames(): array
    {
        return ['regular', 'bold', 'duotone', 'fill', 'light', 'thin'];
    }

    public static function fromStyleName(string $styleName): ?self
    {
        return match (strtolower($styleName)) {
            'regular' => self::Regular,
            'bold' => self::Bold,
            'duotone' => self::Duotone,
            'fill' => self::Fill,
            'light' => self::Light,
            'thin' => self::Thin,
            default => null,
        };
    }
}
