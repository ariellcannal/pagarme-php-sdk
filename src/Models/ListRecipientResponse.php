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
 * Response for the listing recipient method
 */
class ListRecipientResponse implements \JsonSerializable
{
    /**
     * @var GetRecipientResponse[]
     */
    private $data;

    /**
     * @var PagingResponse
     */
    private $paging;

    /**
     * @param GetRecipientResponse[] $data
     * @param PagingResponse $paging
     */
    public function __construct(array $data, PagingResponse $paging)
    {
        $this->data = $data;
        $this->paging = $paging;
    }

    /**
     * Returns Data.
     *
     * Recipients
     *
     * @return GetRecipientResponse[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * Recipients
     *
     * @required
     * @maps data
     *
     * @param GetRecipientResponse[] $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Paging.
     *
     * Paging
     */
    public function getPaging(): PagingResponse
    {
        return $this->paging;
    }

    /**
     * Sets Paging.
     *
     * Paging
     *
     * @required
     * @maps paging
     */
    public function setPaging(PagingResponse $paging): void
    {
        $this->paging = $paging;
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
        $json['data']   = $this->data;
        $json['paging'] = $this->paging;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
