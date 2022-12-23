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
 * Response object for listing charges
 */
class ListChargesResponse implements \JsonSerializable
{
    /**
     * @var GetChargeResponse[]|null
     */
    private $data;

    /**
     * @var PagingResponse|null
     */
    private $paging;

    /**
     * Returns Data.
     * The charge objects
     *
     * @return GetChargeResponse[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * The charge objects
     *
     * @maps data
     *
     * @param GetChargeResponse[]|null $data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Paging.
     * Paging object
     */
    public function getPaging(): ?PagingResponse
    {
        return $this->paging;
    }

    /**
     * Sets Paging.
     * Paging object
     *
     * @maps paging
     */
    public function setPaging(?PagingResponse $paging): void
    {
        $this->paging = $paging;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['data']   = $this->data;
        $json['paging'] = $this->paging;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
