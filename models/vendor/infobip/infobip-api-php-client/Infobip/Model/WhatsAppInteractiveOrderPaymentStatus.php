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

#[DiscriminatorMap(typeProperty: "type", mapping: [
    "BRAZIL" => "\Infobip\Model\WhatsAppInteractiveOrderBrazilPaymentStatus",
    "BRAZIL_LINK" => "\Infobip\Model\WhatsAppInteractiveOrderBrazilLinkPaymentStatus",
    "BRAZIL_PIX_DC" => "\Infobip\Model\WhatsAppInteractiveOrderBrazilPixDcPaymentStatus",
    "PG_PAYU" => "\Infobip\Model\WhatsAppInteractiveOrderUPIPGPayUPaymentStatus",
    "PG_RAZORPAY" => "\Infobip\Model\WhatsAppInteractiveOrderUPIPGRazorpayPaymentStatus",
    "UPI_PAYU" => "\Infobip\Model\WhatsAppInteractiveOrderUPIPayUPaymentStatus",
])]

class WhatsAppInteractiveOrderPaymentStatus
{
    /**
     */
    public function __construct(
        #[Assert\NotBlank]
        protected string $type,
    ) {

    }


    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
