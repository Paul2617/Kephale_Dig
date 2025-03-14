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

class WhatsAppTemplateCardContent
{
    /**
     * @param \Infobip\Model\WhatsAppTemplateButtonContent[] $buttons
     */
    public function __construct(
        #[Assert\Valid]
        #[Assert\NotBlank]
        protected \Infobip\Model\WhatsAppTemplateHeaderContent $header,
        #[Assert\Valid]
        protected ?\Infobip\Model\WhatsAppTemplateBodyContent $body = null,
        #[Assert\Count(max: 2)]
        #[Assert\Count(min: 1)]
        protected ?array $buttons = null,
    ) {

    }


    public function getHeader(): \Infobip\Model\WhatsAppTemplateHeaderContent
    {
        return $this->header;
    }

    public function setHeader(\Infobip\Model\WhatsAppTemplateHeaderContent $header): self
    {
        $this->header = $header;
        return $this;
    }

    public function getBody(): \Infobip\Model\WhatsAppTemplateBodyContent|null
    {
        return $this->body;
    }

    public function setBody(?\Infobip\Model\WhatsAppTemplateBodyContent $body): self
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return \Infobip\Model\WhatsAppTemplateButtonContent[]|null
     */
    public function getButtons(): ?array
    {
        return $this->buttons;
    }

    /**
     * @param \Infobip\Model\WhatsAppTemplateButtonContent[]|null $buttons Card buttons. Should be defined in the correct order, only if `quick reply` or `dynamic URL` buttons have been registered.
     */
    public function setButtons(?array $buttons): self
    {
        $this->buttons = $buttons;
        return $this;
    }
}
