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

class CallsActionConferenceRequest
{
    /**
     */
    public function __construct(
        protected ?string $name = null,
        #[Assert\Valid]
        protected ?\Infobip\Model\CallsConferenceRecordingRequest $recording = null,
        protected ?int $maxDuration = 28800,
    ) {

    }


    public function getName(): string|null
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getRecording(): \Infobip\Model\CallsConferenceRecordingRequest|null
    {
        return $this->recording;
    }

    public function setRecording(?\Infobip\Model\CallsConferenceRecordingRequest $recording): self
    {
        $this->recording = $recording;
        return $this;
    }

    public function getMaxDuration(): int|null
    {
        return $this->maxDuration;
    }

    public function setMaxDuration(?int $maxDuration): self
    {
        $this->maxDuration = $maxDuration;
        return $this;
    }
}
