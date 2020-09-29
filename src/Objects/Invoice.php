<?php

declare(strict_types=1);

namespace LHInvoices\Objects;

class Invoice
{

    function __construct($constructor)
    {
        foreach ($constructor as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            } else {
                trigger_error("Passing redundant key $key to Invoice, ignoring.", E_USER_WARNING);
            }
        }
    }

    /** @var string */
    public $name;

    /** @var string */
    public $address;

    /** @var string */
    public $email;

    /** @var string */
    public $invoiceNum;

    /** @var string */
    public $invoiceCreated;

    /** @var string */
    public $invoiceDue;
}
