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

class WebRtcConversationsDestination extends WebRtcDestination
{
    public const TYPE = 'CONVERSATIONS';

    /**
     */
    public function __construct(
        protected ?string $displayName = null,
    ) {
        $modelDiscriminatorValue = self::TYPE;

        parent::__construct(
            type: $modelDiscriminatorValue,
        );
    }


    public function getDisplayName(): string|null
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }
}
