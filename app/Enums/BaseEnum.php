<?php


namespace App\Enums;

use ReflectionClass;
use ReflectionException;

abstract class BaseEnum
{
    /**
     * Get all enum values
     *
     * @param string $enum
     * @return array
     * @throws ReflectionException
     */
    public static function getValues(string $enum): array
    {
        $result = [];
        $reflectionClass = new ReflectionClass($enum);
        $constants = $reflectionClass->getConstants();

        foreach ($constants as $item) {
            $result[] = $item->value;
        }

        return $result;
    }
}
