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

final class WhatsAppNewTemplateCategory implements EnumInterface
{
    public const AUTHENTICATION = 'AUTHENTICATION';
    public const MARKETING = 'MARKETING';
    public const UTILITY = 'UTILITY';

    public const ALLOWED_VALUES = [
        'AUTHENTICATION',
        'MARKETING',
        'UTILITY',
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

    public static function AUTHENTICATION(): WhatsAppNewTemplateCategory
    {
        return new self('AUTHENTICATION');
    }

    public static function MARKETING(): WhatsAppNewTemplateCategory
    {
        return new self('MARKETING');
    }

    public static function UTILITY(): WhatsAppNewTemplateCategory
    {
        return new self('UTILITY');
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
