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

class EmailReportsResult
{
    /**
     * @param \Infobip\Model\EmailReport[] $results
     */
    public function __construct(
        protected ?array $results = null,
    ) {

    }


    /**
     * @return \Infobip\Model\EmailReport[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * @param \Infobip\Model\EmailReport[]|null $results results
     */
    public function setResults(?array $results): self
    {
        $this->results = $results;
        return $this;
    }
}
