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

use Symfony\Component\Serializer\Annotation\DiscriminatorMap;
use Symfony\Component\Validator\Constraints as Assert;

#[DiscriminatorMap(typeProperty: "otpType", mapping: [
    "COPY_CODE" => "\Infobip\Model\WhatsAppCopyCodeButtonApiData",
    "ONE_TAP" => "\Infobip\Model\WhatsAppOneTapButtonApiData",
])]

class WhatsAppAuthenticationButtonApiData
{
    /**
     */
    public function __construct(
        #[Assert\NotBlank]

        protected string $otpType,
    ) {

    }


    public function getOtpType(): mixed
    {
        return $this->otpType;
    }

    public function setOtpType($otpType): self
    {
        $this->otpType = $otpType;
        return $this;
    }
}
