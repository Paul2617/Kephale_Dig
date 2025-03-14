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

use Symfony\Component\Validator\Constraints as Assert;

class CallsRepeatUntil implements CallsScriptOneOf
{
    /**
     * @param CallsScriptOneOf[] $repeat
     */
    public function __construct(
        #[Assert\NotBlank]
        protected array $repeat,
        #[Assert\NotBlank]
        protected string $until,
    ) {

    }


    /**
     * @return CallsScriptOneOf[]
     */
    public function getRepeat(): array
    {
        return $this->repeat;
    }

    /**
     * @param CallsScriptOneOf[] $repeat Array of actions to execute.
     */
    public function setRepeat(array $repeat): self
    {
        $this->repeat = $repeat;
        return $this;
    }

    public function getUntil(): string
    {
        return $this->until;
    }

    public function setUntil(string $until): self
    {
        $this->until = $until;
        return $this;
    }
}
