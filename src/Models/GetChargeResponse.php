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

/**
 * Response object for getting a charge
 */
class GetChargeResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $gatewayId;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var \DateTime
     */
    private $dueAt;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var GetTransactionResponse|null
     */
    private $lastTransaction;

    /**
     * @var GetInvoiceResponse|null
     */
    private $invoice;

    /**
     * @var GetOrderResponse|null
     */
    private $order;

    /**
     * @var GetCustomerResponse|null
     */
    private $customer;

    /**
     * @var array
     */
    private $metadata;

    /**
     * @var \DateTime|null
     */
    private $paidAt;

    /**
     * @var \DateTime|null
     */
    private $canceledAt;

    /**
     * @var int
     */
    private $canceledAmount;

    /**
     * @var int
     */
    private $paidAmount;

    /**
     * @param string $id
     * @param string $code
     * @param string $gatewayId
     * @param int $amount
     * @param string $status
     * @param string $currency
     * @param string $paymentMethod
     * @param \DateTime $dueAt
     * @param \DateTime $createdAt
     * @param \DateTime $updatedAt
     * @param array $metadata
     * @param int $canceledAmount
     * @param int $paidAmount
     */
    public function __construct(
        string $id,
        string $code,
        string $gatewayId,
        int $amount,
        string $status,
        string $currency,
        string $paymentMethod,
        \DateTime $dueAt,
        \DateTime $createdAt,
        \DateTime $updatedAt,
        array $metadata,
        int $canceledAmount,
        int $paidAmount
    ) {
        $this->id = $id;
        $this->code = $code;
        $this->gatewayId = $gatewayId;
        $this->amount = $amount;
        $this->status = $status;
        $this->currency = $currency;
        $this->paymentMethod = $paymentMethod;
        $this->dueAt = $dueAt;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->metadata = $metadata;
        $this->canceledAmount = $canceledAmount;
        $this->paidAmount = $paidAmount;
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Code.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * @required
     * @maps code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Gateway Id.
     */
    public function getGatewayId(): string
    {
        return $this->gatewayId;
    }

    /**
     * Sets Gateway Id.
     *
     * @required
     * @maps gateway_id
     */
    public function setGatewayId(string $gatewayId): void
    {
        $this->gatewayId = $gatewayId;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @required
     * @maps currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Payment Method.
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     *
     * @required
     * @maps payment_method
     */
    public function setPaymentMethod(string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Due At.
     */
    public function getDueAt(): \DateTime
    {
        return $this->dueAt;
    }

    /**
     * Sets Due At.
     *
     * @required
     * @maps due_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDueAt(\DateTime $dueAt): void
    {
        $this->dueAt = $dueAt;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @required
     * @maps updated_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Last Transaction.
     */
    public function getLastTransaction(): ?GetTransactionResponse
    {
        return $this->lastTransaction;
    }

    /**
     * Sets Last Transaction.
     *
     * @maps last_transaction
     */
    public function setLastTransaction(?GetTransactionResponse $lastTransaction): void
    {
        $this->lastTransaction = $lastTransaction;
    }

    /**
     * Returns Invoice.
     */
    public function getInvoice(): ?GetInvoiceResponse
    {
        return $this->invoice;
    }

    /**
     * Sets Invoice.
     *
     * @maps invoice
     */
    public function setInvoice(?GetInvoiceResponse $invoice): void
    {
        $this->invoice = $invoice;
    }

    /**
     * Returns Order.
     */
    public function getOrder(): ?GetOrderResponse
    {
        return $this->order;
    }

    /**
     * Sets Order.
     *
     * @maps order
     */
    public function setOrder(?GetOrderResponse $order): void
    {
        $this->order = $order;
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?GetCustomerResponse
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @maps customer
     */
    public function setCustomer(?GetCustomerResponse $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Metadata.
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     *
     * @required
     * @maps metadata
     */
    public function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Paid At.
     */
    public function getPaidAt(): ?\DateTime
    {
        return $this->paidAt;
    }

    /**
     * Sets Paid At.
     *
     * @maps paid_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setPaidAt(?\DateTime $paidAt): void
    {
        $this->paidAt = $paidAt;
    }

    /**
     * Returns Canceled At.
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }

    /**
     * Sets Canceled At.
     *
     * @maps canceled_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCanceledAt(?\DateTime $canceledAt): void
    {
        $this->canceledAt = $canceledAt;
    }

    /**
     * Returns Canceled Amount.
     *
     * Canceled Amount
     */
    public function getCanceledAmount(): int
    {
        return $this->canceledAmount;
    }

    /**
     * Sets Canceled Amount.
     *
     * Canceled Amount
     *
     * @required
     * @maps canceled_amount
     */
    public function setCanceledAmount(int $canceledAmount): void
    {
        $this->canceledAmount = $canceledAmount;
    }

    /**
     * Returns Paid Amount.
     *
     * Paid amount
     */
    public function getPaidAmount(): int
    {
        return $this->paidAmount;
    }

    /**
     * Sets Paid Amount.
     *
     * Paid amount
     *
     * @required
     * @maps paid_amount
     */
    public function setPaidAmount(int $paidAmount): void
    {
        $this->paidAmount = $paidAmount;
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
        $json['id']                   = $this->id;
        $json['code']                 = $this->code;
        $json['gateway_id']           = $this->gatewayId;
        $json['amount']               = $this->amount;
        $json['status']               = $this->status;
        $json['currency']             = $this->currency;
        $json['payment_method']       = $this->paymentMethod;
        $json['due_at']               = DateTimeHelper::toRfc3339DateTime($this->dueAt);
        $json['created_at']           = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']           = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        if (isset($this->lastTransaction)) {
            $json['last_transaction'] = $this->lastTransaction;
        }
        if (isset($this->invoice)) {
            $json['invoice']          = $this->invoice;
        }
        if (isset($this->order)) {
            $json['order']            = $this->order;
        }
        if (isset($this->customer)) {
            $json['customer']         = $this->customer;
        }
        $json['metadata']             = $this->metadata;
        if (isset($this->paidAt)) {
            $json['paid_at']          = DateTimeHelper::toRfc3339DateTime($this->paidAt);
        }
        if (isset($this->canceledAt)) {
            $json['canceled_at']      = DateTimeHelper::toRfc3339DateTime($this->canceledAt);
        }
        $json['canceled_amount']      = $this->canceledAmount;
        $json['paid_amount']          = $this->paidAmount;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
