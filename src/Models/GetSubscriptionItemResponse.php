<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\Utils\DateTimeHelper;
use stdClass;

class GetSubscriptionItemResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var GetPricingSchemeResponse|null
     */
    private $pricingScheme;

    /**
     * @var GetDiscountResponse[]|null
     */
    private $discounts;

    /**
     * @var GetIncrementResponse[]|null
     */
    private $increments;

    /**
     * @var GetSubscriptionResponse|null
     */
    private $subscription;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array
     */
    private $quantity = [];

    /**
     * @var array
     */
    private $cycles = [];

    /**
     * @var array
     */
    private $deletedAt = [];

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Pricing Scheme.
     */
    public function getPricingScheme(): ?GetPricingSchemeResponse
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     *
     * @maps pricing_scheme
     */
    public function setPricingScheme(?GetPricingSchemeResponse $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Discounts.
     *
     * @return GetDiscountResponse[]|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    /**
     * Sets Discounts.
     *
     * @maps discounts
     *
     * @param GetDiscountResponse[]|null $discounts
     */
    public function setDiscounts(?array $discounts): void
    {
        $this->discounts = $discounts;
    }

    /**
     * Returns Increments.
     *
     * @return GetIncrementResponse[]|null
     */
    public function getIncrements(): ?array
    {
        return $this->increments;
    }

    /**
     * Sets Increments.
     *
     * @maps increments
     *
     * @param GetIncrementResponse[]|null $increments
     */
    public function setIncrements(?array $increments): void
    {
        $this->increments = $increments;
    }

    /**
     * Returns Subscription.
     */
    public function getSubscription(): ?GetSubscriptionResponse
    {
        return $this->subscription;
    }

    /**
     * Sets Subscription.
     *
     * @maps subscription
     */
    public function setSubscription(?GetSubscriptionResponse $subscription): void
    {
        $this->subscription = $subscription;
    }

    /**
     * Returns Name.
     * Item name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Item name
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Quantity.
     */
    public function getQuantity(): ?int
    {
        if (count($this->quantity) == 0) {
            return null;
        }
        return $this->quantity['value'];
    }

    /**
     * Sets Quantity.
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity['value'] = $quantity;
    }

    /**
     * Unsets Quantity.
     */
    public function unsetQuantity(): void
    {
        $this->quantity = [];
    }

    /**
     * Returns Cycles.
     */
    public function getCycles(): ?int
    {
        if (count($this->cycles) == 0) {
            return null;
        }
        return $this->cycles['value'];
    }

    /**
     * Sets Cycles.
     *
     * @maps cycles
     */
    public function setCycles(?int $cycles): void
    {
        $this->cycles['value'] = $cycles;
    }

    /**
     * Unsets Cycles.
     */
    public function unsetCycles(): void
    {
        $this->cycles = [];
    }

    /**
     * Returns Deleted At.
     */
    public function getDeletedAt(): ?\DateTime
    {
        if (count($this->deletedAt) == 0) {
            return null;
        }
        return $this->deletedAt['value'];
    }

    /**
     * Sets Deleted At.
     *
     * @maps deleted_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDeletedAt(?\DateTime $deletedAt): void
    {
        $this->deletedAt['value'] = $deletedAt;
    }

    /**
     * Unsets Deleted At.
     */
    public function unsetDeletedAt(): void
    {
        $this->deletedAt = [];
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
        $json['id']             = $this->id;
        $json['description']    = $this->description;
        $json['status']         = $this->status;
        $json['created_at']     = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']     = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['pricing_scheme'] = $this->pricingScheme;
        $json['discounts']      = $this->discounts;
        $json['increments']     = $this->increments;
        $json['subscription']   = $this->subscription;
        $json['name']           = $this->name;
        if (!empty($this->quantity)) {
            $json['quantity']   = $this->quantity['value'];
        }
        if (!empty($this->cycles)) {
            $json['cycles']     = $this->cycles['value'];
        }
        if (!empty($this->deletedAt)) {
            $json['deleted_at'] = DateTimeHelper::toRfc3339DateTime($this->deletedAt['value']);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
