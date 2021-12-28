<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * Request for capturing a charge
 */
class CreateCaptureChargeRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var CreateSplitRequest[]|null
     */
    private $split;

    /**
     * @var string
     */
    private $operationReference;

    /**
     * @param string $code
     * @param string $operationReference
     */
    public function __construct(string $code, string $operationReference)
    {
        $this->code = $code;
        $this->operationReference = $operationReference;
    }

    /**
     * Returns Code.
     *
     * Code for the charge. Sending this field will update the code send on the charge and order creation.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * Code for the charge. Sending this field will update the code send on the charge and order creation.
     *
     * @required
     * @maps code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Amount.
     *
     * The amount that will be captured
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * The amount that will be captured
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Split.
     *
     * Splits
     *
     * @return CreateSplitRequest[]|null
     */
    public function getSplit(): ?array
    {
        return $this->split;
    }

    /**
     * Sets Split.
     *
     * Splits
     *
     * @maps split
     *
     * @param CreateSplitRequest[]|null $split
     */
    public function setSplit(?array $split): void
    {
        $this->split = $split;
    }

    /**
     * Returns Operation Reference.
     */
    public function getOperationReference(): string
    {
        return $this->operationReference;
    }

    /**
     * Sets Operation Reference.
     *
     * @required
     * @maps operation_reference
     */
    public function setOperationReference(string $operationReference): void
    {
        $this->operationReference = $operationReference;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return mixed
     */
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['code']                = $this->code;
        if (isset($this->amount)) {
            $json['amount']          = $this->amount;
        }
        if (isset($this->split)) {
            $json['split']           = $this->split;
        }
        $json['operation_reference'] = $this->operationReference;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
