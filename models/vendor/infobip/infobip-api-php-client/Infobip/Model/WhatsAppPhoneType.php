<?php

declare(strict_types=1);

/**
 * Infobip Client API Libraries OpenAPI Specification
 *
 * OpenAPI specification containing public endpoints supported in client API libraries.
 *
 * Contact: support@infobip.com
 *
 * This class is auto generated from the Infobip OpenAPI specification through the OpenAPI Specification Client API libraries (Re)Generator (OSCAR), powered by the OpenAPI Generator (https://openapi-generator.tech).
 *
 * Do not edit manually. To learn how to raise an issue, see the CONTRIBUTING guide or contact us @ support@infobip.com.
 */

namespace Infobip\Model;

use InvalidArgumentException;

final class WhatsAppPhoneType implements EnumInterface
{
    public const CELL = 'CELL';
    public const MAIN = 'MAIN';
    public const IPHONE = 'IPHONE';
    public const HOME = 'HOME';
    public const WORK = 'WORK';

    public const ALLOWED_VALUES = [
        'CELL',
        'MAIN',
        'IPHONE',
        'HOME',
        'WORK',
    ];

    private string $value;

    public function __construct(string $value)
    {
        if (!\in_array($value, self::ALLOWED_VALUES)) {
            throw new InvalidArgumentException(
                sprintf(
                    'Invalid value: %s, allowed values: %s',
                    $value,
                    implode(', ', self::ALLOWED_VALUES)
                )
            );
        }

        $this->value = $value;
    }

    public static function CELL(): WhatsAppPhoneType
    {
        return new self('CELL');
    }

    public static function MAIN(): WhatsAppPhoneType
    {
        return new self('MAIN');
    }

    public static function IPHONE(): WhatsAppPhoneType
    {
        return new self('IPHONE');
    }

    public static function HOME(): WhatsAppPhoneType
    {
        return new self('HOME');
    }

    public static function WORK(): WhatsAppPhoneType
    {
        return new self('WORK');
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
