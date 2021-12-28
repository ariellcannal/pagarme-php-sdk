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
 * Object used for returning lists of objects with pagination
 */
class PagingResponse implements \JsonSerializable
{
    /**
     * @var int
     */
    private $total;

    /**
     * @var string
     */
    private $previous;

    /**
     * @var string
     */
    private $next;

    /**
     * @param int $total
     * @param string $previous
     * @param string $next
     */
    public function __construct(int $total, string $previous, string $next)
    {
        $this->total = $total;
        $this->previous = $previous;
        $this->next = $next;
    }

    /**
     * Returns Total.
     *
     * Total number of pages
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * Sets Total.
     *
     * Total number of pages
     *
     * @required
     * @maps total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * Returns Previous.
     *
     * Previous page
     */
    public function getPrevious(): string
    {
        return $this->previous;
    }

    /**
     * Sets Previous.
     *
     * Previous page
     *
     * @required
     * @maps previous
     */
    public function setPrevious(string $previous): void
    {
        $this->previous = $previous;
    }

    /**
     * Returns Next.
     *
     * Next page
     */
    public function getNext(): string
    {
        return $this->next;
    }

    /**
     * Sets Next.
     *
     * Next page
     *
     * @required
     * @maps next
     */
    public function setNext(string $next): void
    {
        $this->next = $next;
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
        $json['total']    = $this->total;
        $json['previous'] = $this->previous;
        $json['next']     = $this->next;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
