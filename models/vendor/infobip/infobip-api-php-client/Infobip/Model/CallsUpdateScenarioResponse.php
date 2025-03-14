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

use Symfony\Component\Serializer\Annotation as Serializer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

class CallsUpdateScenarioResponse
{
    /**
     * @param \Infobip\Model\CallsScriptOneOf[] $script
     */
    public function __construct(
        #[Serializer\Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s.vP'])]
        protected ?\DateTime $createTime = null,
        protected ?string $description = null,
        protected ?string $id = null,
        protected ?string $name = null,
        protected ?array $script = null,
        #[Serializer\Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s.vP'])]
        protected ?\DateTime $updateTime = null,
        protected ?string $lastUsageDate = null,
    ) {

    }


    public function getCreateTime(): \DateTime|null
    {
        return $this->createTime;
    }

    public function setCreateTime(?\DateTime $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getId(): string|null
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
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

    /**
     * @return \Infobip\Model\CallsScriptOneOf[]|null
     */
    public function getScript(): ?array
    {
        return $this->script;
    }

    /**
     * @param \Infobip\Model\CallsScriptOneOf[]|null $script Array of IVR actions defining scenario. NOTE: Answering Machine Detection, Call Recording and Speech Recognition (used for Capture action) are add-on features. To enable these add-ons, please contact our [sales](https://www.infobip.com/contact) organisation.
     */
    public function setScript(?array $script): self
    {
        $this->script = $script;
        return $this;
    }

    public function getUpdateTime(): \DateTime|null
    {
        return $this->updateTime;
    }

    public function setUpdateTime(?\DateTime $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function getLastUsageDate(): string|null
    {
        return $this->lastUsageDate;
    }

    public function setLastUsageDate(?string $lastUsageDate): self
    {
        $this->lastUsageDate = $lastUsageDate;
        return $this;
    }
}
