<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class CreateAntifraudRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var CreateClearSaleRequest
     */
    private $clearsale;

    /**
     * @param string $type
     * @param CreateClearSaleRequest $clearsale
     */
    public function __construct(string $type, CreateClearSaleRequest $clearsale)
    {
        $this->type = $type;
        $this->clearsale = $clearsale;
    }

    /**
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Clearsale.
     */
    public function getClearsale(): CreateClearSaleRequest
    {
        return $this->clearsale;
    }

    /**
     * Sets Clearsale.
     *
     * @required
     * @maps clearsale
     */
    public function setClearsale(CreateClearSaleRequest $clearsale): void
    {
        $this->clearsale = $clearsale;
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
        $json['type']      = $this->type;
        $json['clearsale'] = $this->clearsale;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
