<?php


namespace App\Enums;

use ReflectionException;

enum ImgExtensionEnum: string
{
    case PNG = 'png';
    case JPG = 'jpg';

    /**
     * @throws ReflectionException
     */
    public static function getValues(): array
    {
        return BaseEnum::getValues(self::class);
    }
}
